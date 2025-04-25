<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $food = trim($_POST["food"]);
    $rating = intval($_POST["rating"]);
    $feedback = trim($_POST["feedback"]);

    if (empty($food) || empty($rating) || empty($feedback)) {
        echo "All fields are required.";
        exit();
    }

    $conn = new mysqli("localhost", "root", "", "php22");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $stmt = $conn->prepare("INSERT INTO reviews (food, rating, feedback) VALUES (?, ?, ?)");
    $stmt->bind_param("sis", $food, $rating, $feedback);

    if ($stmt->execute()) {
        echo "✅ Review submitted successfully!";
    } else {
        echo "❌ Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Invalid request.";
}
?>
