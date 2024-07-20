<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Perform basic validation
    if ($username === "admin" && $password === "password@123") {
        // Successful login, redirect to admin dashboard
        header("Location: admin_dashboard.php");
        exit;
    } else {
        // Invalid credentials, display error message
        echo "Invalid username or password.";
    }
}
?>
