<?php
// contact_submit.php
session_start();
require_once 'db.php'; // Ensure this file sets up your PDO connection

// Set the header to JSON
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve and sanitize POST data
    $name    = trim($_POST['name']);
    $email   = trim($_POST['contact-email']);
    $message = trim($_POST['message']);

    // Basic validation
    if (empty($name) || empty($email) || empty($message)) {
        echo json_encode([
            "success" => false, 
            "message" => "All fields are required."
        ]);
        exit();
    }
    
    // Prepare and execute the insert query using a prepared statement
    $stmt = $pdo->prepare("INSERT INTO contact_submissions (name, email, message) VALUES (?, ?, ?)");
    
    if ($stmt->execute([$name, $email, $message])) {
        echo json_encode([
            "success" => true, 
            "message" => "Your message has been sent successfully!"
        ]);
        exit();
    } else {
        echo json_encode([
            "success" => false, 
            "message" => "Error: Unable to send your message. Please try again later."
        ]);
        exit();
    }
} else {
    echo json_encode([
        "success" => false, 
        "message" => "Invalid request method."
    ]);
    exit();
}
?>
