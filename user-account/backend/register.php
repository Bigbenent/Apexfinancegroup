<?php
session_start();
require 'db_connect.php';
require '../../vendor/autoload.php'; // for Brevo SDK

use SendinBlue\Client\Api\TransactionalEmailsApi;
use SendinBlue\Client\Configuration;
use GuzzleHttp\Client;

// Function to generate unique 11-digit account number
function generateAccountNumber($pdo) {
    do {
        $accountNumber = str_pad(mt_rand(0, 99999999999), 11, '0', STR_PAD_LEFT);
        $stmt = $pdo->prepare("SELECT id FROM users WHERE account_number = ?");
        $stmt->execute([$accountNumber]);
    } while ($stmt->rowCount() > 0);
    return $accountNumber;
}

// Function to send styled OTP email with Brevo
function sendVerificationEmail($toEmail, $toName, $otp) {
    $config = Configuration::getDefaultConfiguration()->setApiKey('api-key', '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');
    $apiInstance = new TransactionalEmailsApi(new Client(), $config);

    $subject = "Verify Your Account - ApexFinance";
    $htmlContent = "
    <div style='font-family: Arial, sans-serif; max-width:600px; margin:auto; border:1px solid #ddd; padding:20px;'>
        <div style='background:#003366; padding:15px; text-align:center; color:white;'>
            <h2>ApexFinance</h2>
        </div>
        <h3>Hello {$toName},</h3>
        <p>Thank you for opening an account with <b>ApexFinance</b>.</p>
        <p>Please use the OTP below to verify your email and activate your account:</p>
        <div style='background:#f4f4f4; padding:15px; font-size:20px; text-align:center; letter-spacing:5px;'>
            <b>{$otp}</b>
        </div>
        <p>This OTP is valid for <b>10 minutes</b>. Do not share it with anyone.</p>
        <br>
        <p>Best Regards,<br> <b>ApexFinance Team</b></p>
        <hr>
        <small style='color:#888;'>This is an automated message, please do not reply.</small>
    </div>
    ";

    $sendSmtpEmail = new \SendinBlue\Client\Model\SendSmtpEmail([
        'subject' => $subject,
        'sender' => ['name' => 'ApexFinance', 'email' => 'support@apex-financegroup.com'],
        'to' => [['email' => $toEmail, 'name' => $toName]],
        'htmlContent' => $htmlContent
    ]);

    try {
        $apiInstance->sendTransacEmail($sendSmtpEmail);
    } catch (Exception $e) {
        error_log('Email could not be sent. Error: ' . $e->getMessage());
    }
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Collect data
    $first_name = trim($_POST['first_name']);
    $last_name = trim($_POST['last_name']);
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];

    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $address = trim($_POST['address']);
    $city = trim($_POST['city']);
    $state = trim($_POST['state']);
    $country = trim($_POST['country']);

    $username = trim($_POST['username']);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $transaction_pin = $_POST['transaction_pin'];
    $account_type = $_POST['account_type'];
    $currency = $_POST['currency'];

    // Validations
    $errors = [];
    if (empty($first_name) || empty($last_name) || empty($dob) || empty($gender) ||
        empty($email) || empty($phone) || empty($username) ||
        empty($password) || empty($confirm_password) || empty($transaction_pin)) {
        $errors[] = "All required fields must be filled.";
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    }

    if (!preg_match("/^[0-9]{10,15}$/", $phone)) {
        $errors[] = "Phone number must be 10–15 digits.";
    }

    if ($password !== $confirm_password) {
        $errors[] = "Passwords do not match.";
    }

    if (strlen($password) < 8) {
        $errors[] = "Password must be at least 8 characters.";
    }

    if (!preg_match("/^[0-9]{6}$/", $transaction_pin)) {
        $errors[] = "Transaction PIN must be exactly 6 digits.";
    }

    // Check duplicates
    $stmt = $pdo->prepare("SELECT id FROM users WHERE email = ? OR phone = ? OR username = ?");
    $stmt->execute([$email, $phone, $username]);
    if ($stmt->rowCount() > 0) {
        $errors[] = "Email, phone, or username already exists.";
    }

    if (empty($errors)) {
        // Hash password
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

        // Generate unique account number
        $account_number = generateAccountNumber($pdo);

        // Generate OTP
        $otp = rand(100000, 999999);
        $otp_expiry = date("Y-m-d H:i:s", strtotime("+10 minutes"));

        // Insert into database with pending status
        $stmt = $pdo->prepare("INSERT INTO users 
            (first_name, last_name, dob, gender, email, phone, address, city, state, country, 
             account_number, account_type, currency, username, password, transaction_pin, status, otp, otp_expires_at) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, 'pending', ?, ?)");

        $success = $stmt->execute([
            $first_name, $last_name, $dob, $gender,
            $email, $phone, $address, $city, $state, $country,
            $account_number, $account_type, $currency,
            $username, $hashedPassword, $transaction_pin,
            $otp, $otp_expiry
        ]);

        if ($success) {
            // Send OTP email
            sendVerificationEmail($email, $first_name, $otp);

            $_SESSION['pending_email'] = $email;
            header("Location: verify.php");
            exit();
        } else {
            $errors[] = "Something went wrong. Try again.";
        }
    }

    $_SESSION['errors'] = $errors;
    header("Location: ../register.php");
    exit();
}
?>
