<?php
// Connect to MySQL database
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "student_db";
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Perform SQL query to retrieve all records from the table
$sql = "SELECT * FROM students";
$result = mysqli_query($conn, $sql);

// Display the data in a table format
echo "<table>";
echo "<tr><th>Enrollment No.</th><th>Name</th><th>Semester</th><th>Gender</th><th>Qualification</th></tr>";
while($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td>" . $row["enrollment_no"] . "</td><td>" . $row["name"] . "</td><td>" . $row["semester"] . "</td><td>" . $row["gender"] . "</td><td>" . $row["qualification"] . "</td></tr>";
}
echo "</table>";

// Close the database connection
mysqli_close($conn);
?>
