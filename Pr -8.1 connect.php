<?php
//DB connection

$host = "localhost";
$user = "root";
$password = "root";
$db_name = "reg_db";

$conn = mysqli_connect($host, $user, $password, $db_name);
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['submit'])) {
    $first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $c_password = mysqli_real_escape_string($conn, $_POST['c_password']);
    
    // Validate the form data
    if (empty($first_name) || empty($last_name) || empty($email) || empty($phone) || empty($password) || empty($c_password)) {
    echo "Please fill in all the fields.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Please enter a valid email address.";
    } elseif (!preg_match("/^[0-9]{10}$/", $phone)) {
    echo "Please enter a valid phone number.";
    } elseif ($password != $c_password) {
    echo "Password does not match.";
    } else {
    // Insert the data into the database
    $sql = "INSERT INTO registrations (first_name, last_name, email, phone, password) VALUES ('$first_name', '$last_name', '$email', '$phone', '$password')";
    if (mysqli_query($conn, $sql)) {
    echo "Registration successful.";
    } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    }
    }

?>