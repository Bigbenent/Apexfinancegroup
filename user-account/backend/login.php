<?php
session_start();
require 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = trim($_POST['username']);
    $password = $_POST['password'];

    if (empty($username) || empty($password)) {
        $_SESSION['error'] = "Please fill in all fields.";
        header("Location: ../login.php");
        exit();
    }

    // Check user
    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ? OR email = ? LIMIT 1");
    $stmt->execute([$username, $username]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user['password'])) {
        if ($user['status'] !== 'active') {
            $_SESSION['error'] = "Your account is not active. Contact support.";
            header("Location: ../login.php");
            exit();
        }

        // Save session
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['role'] = $user['role'];
        $_SESSION['account_number'] = $user['account_number'];

        header("Location: dashboard.php");
        exit();
    } else {
        $_SESSION['error'] = "Invalid login credentials.";
        header("Location: ../login.php");
        exit();
    }
}
?>
