<html>
  <head><title>Opened Account</title>
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
        <h1>Opened Account Details</h1>

<table>
  <tr>
    <th>Account Type</th>
    <th>Primary Applicant</th>
    <th>Joint Applicant 1</th>
    <th>Joint Applicant 2</th>
    <th>Address</th>
    <th>Email</th>
    <th>Mobile</th>
    <th>Primary Applicant Photo</th>
    <th>Joint Applicant 1 Photo</th>
    <th>Joint Applicant 2 Photo</th>
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
$sql = "SELECT * FROM accounts";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row["actype"] . "</td>";
    echo "<td>" . $row["p_name"] . "</td>";
    echo "<td>" . $row["j1_name"] . "</td>";
    echo "<td>" . $row["j2_name"] . "</td>";
    echo "<td>" . $row["address"] . "</td>";
    echo "<td>" . $row["email"] . "</td>";
    echo "<td>" . $row["phone"] . "</td>";
    echo "<td>" . $row["picture1"] . "</td>";
    echo "<td>" . $row["picture2"] . "</td>";
    echo "<td>" . $row["picture3"] . "</td>";
    echo "</tr>";
  }
} else {
  echo "No Accounts Opened";
}

mysqli_close($conn);
?>
</table>
<a href="Pr -8.3 Bank account open form.html">New Account? <br> Click here to Open Account</a>
</div>

