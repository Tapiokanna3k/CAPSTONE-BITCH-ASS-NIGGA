<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Simple validation (replace with database validation)
    if ($username == "admin" && $password == "1234") {
        echo "Login successful! Welcome, " . htmlspecialchars($username);
    } else {
        echo "Invalid username or password.";
    }
}

