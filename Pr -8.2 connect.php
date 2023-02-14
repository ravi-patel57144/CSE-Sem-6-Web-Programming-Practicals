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
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $f_name = mysqli_real_escape_string($conn, $_POST['f_name']);
    $m_name = mysqli_real_escape_string($conn, $_POST['m_name']);
    $dob = mysqli_real_escape_string($conn, $_POST['dob']);
    $mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    $course = mysqli_real_escape_string($conn, $_POST['course']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    
    // Validate the form data
    if (empty($name) || empty($f_name) || empty($m_name) || empty($dob) || empty($mobile) || empty($gender) || empty($course || empty($address))) {
    echo "Please fill in all the fields.";
    } elseif (!preg_match("/^[0-9]{10}$/", $mobile)) {
    echo "Please enter a valid phone number.";
    } else {
    // Insert the data into the database
    $sql = "INSERT INTO students (name, f_name, m_name, dob, mobile, gender, course, address)
    VALUES ('$name', '$f_name', '$m_name', '$dob', '$mobile', '$gender', '$course', '$address')";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    }
}

    mysqli_close($conn);

?>