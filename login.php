<?php
// login.php
session_start();
require_once 'db.php';

// Set JSON header so the browser knows the response is JSON
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email    = trim($_POST['email']);
    $password = $_POST['password'];

    $stmt = $pdo->prepare("SELECT id, name, email, password FROM users WHERE email = ?");
    $stmt->execute([$email]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password'])) {
         // Successful login: set session variables
         $_SESSION['user_id']   = $user['id'];
         $_SESSION['user_name'] = $user['name'];
         echo json_encode(["success" => true, "name" => $user['name']]);
         exit();
    } else {
         echo json_encode(["success" => false, "error" => "Invalid email or password."]);
         exit();
    }
} else {
    echo json_encode(["success" => false, "error" => "Invalid request method."]);
    exit();
}
?>
