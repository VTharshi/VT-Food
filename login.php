<?php
// Show all errors (useful for debugging during development)
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST["username"]);
    $password = $_POST["password"];

    // Check if fields are not empty
    if (empty($username) || empty($password)) {
        echo "Both fields are required.";
        exit();
    }

    // Connect to MySQL (database name is php22)
    $conn = new mysqli("localhost", "root", "", "php22");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Fetch user from database
    $stmt = $conn->prepare("SELECT id, password FROM signpu WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($id, $hashedPassword);
    $stmt->fetch();

    // Check if username exists
    if ($stmt->num_rows > 0) {
        // Verify the entered password against the stored hash
        if (password_verify($password, $hashedPassword)) {
            // Successful login
            echo "Login successful!";
            // Start a session or redirect as needed
        } else {
            // Invalid password
            echo "Invalid password.";
        }
    } else {
        // No such user found
        echo "No such user found.";
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Please submit the form.";
}
?>
