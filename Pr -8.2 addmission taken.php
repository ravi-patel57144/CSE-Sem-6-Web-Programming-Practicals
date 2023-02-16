<html>
  <head><title>Addmission Taken</title>
  <style>
      a {
        display: block;
        margin: 0 auto;
        text-align: center;
        padding-top: 20px;
      }

      body {
        padding-top: 50px;
      }
      h1 {
        display: flex;
        justify-content: center;
      }
      .registrations-container {
        width: 95%;
        margin: 0 auto;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 20px;
      }
  table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
  }

  td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 5px;
  }

  tr:nth-child(even) {
    background-color: #dddddd;
  }
</style>

<div class="registrations-container">
        <h1>Addmission Taken Details</h1>

<table>
  <tr>
    <th>Name</th>
    <th>Father's Name</th>
    <th>Mother's Name</th>
    <th>DOB</th>
    <th>Mobile</th>
    <th>Gender</th>
    <th>Course</th>
    <th>Address</th>
  </tr>

<?php
$host = "localhost";
$user = "root";
$password = "root";
$dbname = "reg_db";

// Create connection
$conn = mysqli_connect($host, $user, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Select data from the table
$sql = "SELECT * FROM students";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row["name"] . "</td>";
    echo "<td>" . $row["f_name"] . "</td>";
    echo "<td>" . $row["m_name"] . "</td>";
    echo "<td>" . $row["dob"] . "</td>";
    echo "<td>" . $row["mobile"] . "</td>";
    echo "<td>" . $row["gender"] . "</td>";
    echo "<td>" . $row["course"] . "</td>";
    echo "<td>" . $row["address"] . "</td>";
    echo "</tr>";
  }
} else {
  echo "No addmission taken";
}

mysqli_close($conn);
?>
</table>
<a href="Pr -8.2 College addmission form.html">New Addmission? <br> Click here to Take Addmission</a>
</div>

