<?php
session_start();
require 'db_connect.php';
require '../../vendor/autoload.php'; // Brevo SDK

use SendinBlue\Client\Api\TransactionalEmailsApi;
use SendinBlue\Client\Configuration;
use GuzzleHttp\Client;

// Function to send OTP email
function sendVerificationEmail($toEmail, $toName, $otp) {
    $config = Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_BREVO_API_KEY');
    $apiInstance = new TransactionalEmailsApi(new Client(), $config);

    $subject = "Resend OTP - ApexFinance";
    $htmlContent = "
    <div style='font-family: Arial, sans-serif; max-width:600px; margin:auto; border:1px solid #ddd; padding:20px;'>
        <div style='background:#003366; padding:15px; text-align:center; color:white;'>
            <h2>ApexFinance</h2>
        </div>
        <h3>Hello {$toName},</h3>
        <p>Your new OTP for account verification is:</p>
        <div style='background:#f4f4f4; padding:15px; font-size:20px; text-align:center; letter-spacing:5px;'>
            <b>{$otp}</b>
        </div>
        <p>This OTP is valid for <b>10 minutes</b>. Please verify your account promptly.</p>
        <br>
        <p>Best Regards,<br> <b>ApexFinance Team</b></p>
        <hr>
        <small style='color:#888;'>This is an automated message, please do not reply.</small>
    </div>
    ";

    $sendSmtpEmail = new \SendinBlue\Client\Model\SendSmtpEmail([
        'subject' => $subject,
        'sender' => ['name' => 'ApexFinance', 'email' => 'no-reply@apexfinance.com'],
        'to' => [['email' => $toEmail, 'name' => $toName]],
        'htmlContent' => $htmlContent
    ]);

    try {
        $apiInstance->sendTransacEmail($sendSmtpEmail);
    } catch (Exception $e) {
        error_log('Email could not be sent. Error: ' . $e->getMessage());
    }
}

if (!isset($_SESSION['pending_email'])) {
    header("Location: ../register.php");
    exit();
}

$email = $_SESSION['pending_email'];
$message = "";

// Handle OTP submission
if (isset($_POST['verify'])) {
    $otp = trim($_POST['otp']);

    $stmt = $pdo->prepare("SELECT id, first_name, otp, otp_expires_at FROM users WHERE email = ? AND status = 'pending'");
    $stmt->execute([$email]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user) {
        if ($user['otp'] == $otp && strtotime($user['otp_expires_at']) > time()) {
            // Update user status
            $update = $pdo->prepare("UPDATE users SET status='active', otp=NULL, otp_expires_at=NULL WHERE id=?");
            $update->execute([$user['id']]);

            unset($_SESSION['pending_email']);
            $_SESSION['success'] = "🎉 Your account has been verified! You can now login.";
            header("Location: login.php");
            exit();
        } else {
            $message = "❌ Invalid or expired OTP.";
        }
    } else {
        $message = "⚠ No pending account found.";
    }
}

// Handle Resend OTP
if (isset($_POST['resend'])) {
    $stmt = $pdo->prepare("SELECT id, first_name FROM users WHERE email = ? AND status='pending'");
    $stmt->execute([$email]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user) {
        $newOtp = rand(100000, 999999);
        $otp_expiry = date("Y-m-d H:i:s", strtotime("+10 minutes"));

        $update = $pdo->prepare("UPDATE users SET otp=?, otp_expires_at=? WHERE id=?");
        $update->execute([$newOtp, $otp_expiry, $user['id']]);

        sendVerificationEmail($email, $user['first_name'], $newOtp);

        $message = "✅ A new OTP has been sent to your email.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ApexFinance - Verify Account</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow p-4">
                <h4 class="text-center mb-3">Verify Your Account</h4>
                <?php if ($message): ?>
                    <div class="alert alert-info"><?= $message ?></div>
                <?php endif; ?>
                <form method="POST">
                    <div class="mb-3">
                        <label class="form-label">Enter OTP</label>
                        <input type="text" name="otp" class="form-control" placeholder="6-digit code" required>
                    </div>
                    <button type="submit" name="verify" class="btn btn-primary w-100 mb-2">Verify</button>
                </form>
                <form method="POST">
                    <button type="submit" name="resend" class="btn btn-link w-100">Resend OTP</button>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>
