<?php
// Show all errors (useful for debugging during development)
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST["username"]);
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirmPassword"];

    // Check if fields are not empty
    if (empty($username) || empty($password) || empty($confirmPassword)) {
        echo "All fields are required.";
        exit();
    }

    // Check if passwords match
    if ($password !== $confirmPassword) {
        echo "Passwords do not match.";
        exit();
    }

    // Connect to MySQL
    $conn = new mysqli("localhost", "root", "", "php22");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Check if username already exists
    $stmt = $conn->prepare("SELECT id FROM signpu WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        echo "Username already exists. Please choose another.";
    } else {
        $stmt->close();

        // Hash password
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Insert new user
        $stmt = $conn->prepare("INSERT INTO signpu (username, password) VALUES (?, ?)");
        $stmt->bind_param("ss", $username, $hashedPassword);

        if ($stmt->execute()) {
            echo "✅ Data added successfully!";
        } else {
            echo "❌ Error inserting data: " . $stmt->error;
        }
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Please submit the form.";
}
?>
