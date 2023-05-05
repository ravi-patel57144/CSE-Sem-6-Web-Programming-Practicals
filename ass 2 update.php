<!DOCTYPE html>
<html>
<head>
	<title>Update Student Record</title>
</head>
<body>
	<?php
	//connect to database
	$con=mysqli_connect("localhost","root","root","student_db");
    //check if form is submitted
if(isset($_POST['update'])){
	$enrollment_no=$_POST['enrollment_no'];
	$name=$_POST['name'];
	$semester=$_POST['semester'];
	$gender=$_POST['gender'];
	$qualification=$_POST['qualification'];

	//update query
	$query="UPDATE students SET name='$name', semester='$semester', gender='$gender', qualification='$qualification' WHERE enrollment_no='$enrollment_no'";

	//execute query
	$result=mysqli_query($con,$query);

	if($result){
		echo "Record updated successfully.";
	}
	else{
		echo "Error: " . mysqli_error($con);
	}
}
?>
<h2>Update Student Record</h2>
<form method="POST">
	<label>Enrollment No:</label>
	<input type="text" name="enrollment_no" required>
	<label>Name:</label>
	<input type="text" name="name" required>
	<label>Semester:</label>
	<input type="text" name="semester" required>
	<label>Gender:</label>
	<input type="radio" name="gender" value="M" required>Male
	<input type="radio" name="gender" value="F" required>Female
	<br><br>
	<label>Qualification:</label>
	<input type="text" name="qualification" required>
	<br><br>
	<input type="submit" name="update" value="Update Record">
</form>
</body>
</html>