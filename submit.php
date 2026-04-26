<?php
$conn = new mysqli("localhost", "vaishu", "Vaishu@12345", "feedback_db");

if ($conn->connect_error) {
    die("DB Connection Failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] != "POST") {
    die("Invalid Access - Use Form Only");
}

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$sql = "INSERT INTO feedback (name, email, message)
VALUES ('$name', '$email', '$message')";

if ($conn->query($sql)) {
    echo "<h2 style='color:green;text-align:center;'>Feedback Submitted Successfully!</h2>";
    echo "<p style='text-align:center;'><a href='form.html'>Go Back</a></p>";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
