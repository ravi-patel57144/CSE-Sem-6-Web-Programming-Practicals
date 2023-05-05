<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "student_db";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Prepare SQL statement
$sql = "INSERT INTO students (enrollment_no, name, semester, gender, qualification) VALUES (?, ?, ?, ?, ?)";

// Bind parameters
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "sssss", $_POST['enrollment_no'], $_POST['name'], $_POST['semester'], $_POST['gender'], $_POST['qualification']);

// Execute statement
if (mysqli_stmt_execute($stmt)) {
    echo "Record inserted successfully";
} else {
    echo "Error inserting record: " . mysqli_error($conn);
}

// Close statement and connection
mysqli_stmt_close($stmt);
mysqli_close($conn);
?>
