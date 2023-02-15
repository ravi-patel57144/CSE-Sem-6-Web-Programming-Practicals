<html>
  <head><title>Practical 11</title>
    <style>
        body {
        padding-top: 50px;
      }

      .form-container {
        width: 70%;
        margin: 0 auto;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 20px;
      }

      h1,h3 {
        text-align: center;
      }

      label {
        font-weight: bold;
        margin-top: 10px;
        display: block;
      }

      input[type="text"],
      input[type="date"] {
        width: 100%;
        padding: 10px;
        margin-top: 10px;
        border-radius: 5px;
        border: 1px solid #ccc;
      }

      input[type="radio"] {
        width: 5%;
        padding: 10px;
        margin-top: 10px;
        border-radius: 5px;
        border: 1px solid #ccc;
      }

      input[type="submit"] {
        width: 100%;
        padding: 10px;
        margin-top: 20px;
        border-radius: 20px;
        border: #020202 solid;
        background-color: #658e66;
        color: white;
        cursor: pointer;
      }
    </style>
  </head>
  <body>
    <div class="form-container">
      <h1><u>ABC College</u></h1>
      <h3>New Admission Form</h3>
      <form action="Pr -8.2 connect.php" method="POST">
        <label>Full Name</label>
        <input type="text" name="name">

        <label>Father's Name</label>
        <input type="text" name="f_name">

        <label>Mother's Name</label>
        <input type="text" name="m_name">

        <label>Date of Birth</label>
        <input type="date" name="dob">

        <label>Mobile Number</label>
        <input type="text" name="mobile">

        <label>Gender</label>
        <input type="radio" name="gender" value="Male">Male &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio" name="gender" value="Female">Female &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio" name="gender" value="Other">Other &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

        <label>Course</label>
        <input type="text" name="course">

        <label>Full Address</label>
        <input type="text" name="address">

        <input type="submit" name="submit" value="Submit"><br><br>

        <a href="Pr -4.2 addmission taken.php">Addmission Taken Details</a>
      </form>
    </div> 
  </body> 
</html>


<!-- 






<?php
// Include the database connection file
include_once('db_connection.php');

// Initialize variables
$id = 0;
$update = false;
$name = '';
$email = '';

// Create student data
if (isset($_POST['create'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];

    $query = "INSERT INTO students (name, email) VALUES ('$name', '$email')";
    mysqli_query($conn, $query);

    header('location: index.php');
}

// Update student data
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];

    $query = "UPDATE students SET name='$name', email='$email' WHERE id=$id";
    mysqli_query($conn, $query);

    header('location: index.php');
}

// Delete student data
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];

    $query = "DELETE FROM students WHERE id=$id";
    mysqli_query($conn, $query);

    header('location: index.php');
}

// Retrieve student data
$results = mysqli_query($conn, "SELECT * FROM students");
?>

<html>
<head>
    <title>Student Data - CRUD</title>
</head>
<body>
    <form action="Pr -4.2 connect.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <label>Name:</label>
        <input type="text" name="name" value="<?php echo $name; ?>">
        <label>Email:</label>
        <input type="email" name="email" value="<?php echo $email; ?>">

        <?php if ($update == true): ?>
            <button type="submit" name="update">Update</button>
        <?php else: ?>
            <button type="submit" name="create">Create</button>
        <?php endif ?>
    </form>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = mysqli_fetch_array($results)) { ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td>
                        <a href="index.php?edit=<?php echo $row['id']; ?>">Edit</a>
                        <a href="index.php?delete=<?php echo $row['id']; ?>">Delete</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html> -->
