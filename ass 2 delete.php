<!DOCTYPE html>
<html>
<head>
	<title>Delete Student Record</title>
</head>
<body>
	<?php
	//connect to database
	$con=mysqli_connect("localhost","root","root","student_db");
    //check if form is submitted
if(isset($_POST['delete'])){
	$enrollment_no=$_POST['enrollment_no'];

	//delete query
	$query="DELETE FROM students WHERE enrollment_no='$enrollment_no'";

	//execute query
	$result=mysqli_query($con,$query);

	if($result){
		echo "Record deleted successfully.";
	}
	else{
		echo "Error: " . mysqli_error($con);
	}
}
?>
<h2>Delete Student Record</h2>
<form method="POST">
	<label>Enrollment No:</label>
	<input type="text" name="enrollment_no" required>
	<br><br>
	<input type="submit" name="delete" value="Delete Record">
</form>
</body>
</html>