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
    $type = mysqli_real_escape_string($conn, $_POST['actype']);
    $p_name = mysqli_real_escape_string($conn, $_POST['p_name']);
    $j1_name = mysqli_real_escape_string($conn, $_POST['j1_name']);
    $j2_name = mysqli_real_escape_string($conn, $_POST['j2_name']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $picture1 = file_get_contents($_FILES['picture1']['tmp_name']);
    $picture2 = file_get_contents($_FILES['picture2']['tmp_name']);
    $picture3 = file_get_contents($_FILES['picture3']['tmp_name']);
}

//Validate the form data

if (empty($type) || empty($p_name) || empty($address) || empty($email) || empty($phone) || empty($picture1)) {
    echo "Please fill in all the fields.";
} elseif (!preg_match("/^[0-9]{10}$/", $phone)) {
    echo "Please enter a valid phone number.";
} else {
    // Insert the data in the database
    $sql = "INSERT INTO accounts (actype, p_name, j1_name, j2_name, address, email, phone, picture1, picture2, picture3)
    VALUES ('$type', '$p_name', '$j1_name', '$j2_name', '$address', '$email', '$phone', '$picture1', '$picture2', '$picture3')";

if (mysqli_query($conn, $sql)) {
    echo "Account opening request created successfully!!";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}

mysqli_close($conn);
?>
