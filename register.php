<?php
// register.php
session_start();
require_once 'db.php';

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name     = trim($_POST['name']);
    $email    = trim($_POST['email']);
    $password = $_POST['password'];
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Check if email already exists
    $stmt = $pdo->prepare("SELECT id FROM users WHERE email = ?");
    $stmt->execute([$email]);
    if ($stmt->rowCount() > 0) {
        $error = "Email already registered.";
    } else {
         // Insert new user
         $stmt = $pdo->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
         if ($stmt->execute([$name, $email, $hashedPassword])) {
             $_SESSION['user_id'] = $pdo->lastInsertId();
             $_SESSION['user_name'] = $name;
             header("Location: ../index.php");
             exit();
         } else {
             $error = "Registration failed. Please try again.";
         }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Register - Career Compass</title>
  <link rel="stylesheet" href="../Assets/css/home.css">
</head>
<body>
  <?php include 'reg-header.php'; ?>
  <section class="register">
    <h2>Register</h2>
    <?php if ($error): ?>
      <p class="error"><?php echo htmlspecialchars($error); ?></p>
    <?php endif; ?>
    <form action="register.php" method="POST" class="contact-form">
      <div class="form-group">
          <label for="name">Name</label>
          <input type="text" name="name" id="name" required>
      </div>
      <div class="form-group">
          <label for="email">Email</label>
          <input type="email" name="email" id="email" required>
      </div>
      <div class="form-group">
          <label for="password">Password</label>
          <input type="password" name="password" id="password" required>
      </div>
      <button type="submit" class="login-btn">Register</button>
    </form>
  </section>
</body>
</html>
