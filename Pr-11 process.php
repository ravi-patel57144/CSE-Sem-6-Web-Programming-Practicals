<?php
// Step 2: Create a connection
$conn = mysqli_connect("localhost", "root", "root", "student_database");

// Step 4: Add functionality
if(isset($_POST['add_student'])) {
  // Retrieve data from form
  $student_id = $_POST['student_id'];
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];

  // Add data to database
  $sql = "INSERT INTO students (student_id, name, email, phone) VALUES ('$student_id', '$name', '$email', '$phone')";
  mysqli_query($conn, $sql);
}

if(isset($_POST['update_student'])) {
  // Retrieve data from form
  $student_id = $_POST['student_id'];
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];

  // Update data in database
  $sql = "UPDATE students SET name='$name', email='$email', phone='$phone' WHERE student_id='$student_id'";
  mysqli_query($conn, $sql);
}

if(isset($_POST['delete_student'])) {
  // Retrieve data from form
  $student_id = $_POST['student_id'];

  // Delete data from database
  $sql = "DELETE FROM students WHERE student_id='$student_id'";
  mysqli_query($conn, $sql);
}

// Step 5: Display data
$sql = "SELECT * FROM students";
$result = mysqli_query($conn, $sql);

echo "<table>";
echo "<tr><th>Student ID</th><th>Name</th><th>Email</th><th>Phone</th></tr>";
while($row = mysqli_fetch_assoc($result)) {
  echo "<tr>";
  echo "<td>" . $row['student_id'] . "</td>";
  echo "<td>" . $row['name'] . "</td>";
  echo "<td>" . $row['email'] . "</td>";
  echo "<td>" . $row['phone'] . "</td>";
  echo "</tr>";
}
echo "</table>";
?>

