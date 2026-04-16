<?php
include('includes/db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $type = mysqli_real_escape_string($conn, $_POST['type']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    $sql = "INSERT INTO prayer_requests (name, email, request_type, message) 
            VALUES ('$name', '$email', '$type', '$message')";

    if (mysqli_query($conn, $sql)) {
        // Success! Redirect back with a success message
        header("Location: index.php?status=success#contact");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
