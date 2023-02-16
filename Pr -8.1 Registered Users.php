<html>
  <head><title>Registered User</title>
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
        width: 80%;
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
        padding: 8px;
      }

      tr:nth-child(even) {
        background-color: #dddddd;
      }
    </style>
  </head>
  <body>
      <div class="registrations-container">
        <h1>Registered Users</h1>

        <table class="center">
          <tr>
            <th>First Name</th><th>Last Name</th><th>Email</th><th>Phone</th>
          </tr>
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "root";
        $dbname = "reg_db";
      // Create connection
      $conn = new mysqli($servername, $username, $password, $dbname);

      // Check connection
      if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
      }

      // Get all registrations from the database
      $sql = "SELECT * FROM registrations";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
      echo "<tr><td>" . $row["first_name"] . "</td><td>" . $row["last_name"] . "</td><td>" . $row["email"] . "</td><td>" . $row["phone"] ."</td></tr>";
      }
      echo "</table>";
      } else {
      echo "No registrations found";
      }

      // Close the database connection
      $conn->close();
      ?>

      </div>
      <a href="Pr -8.1 Registration form.html">Not Registered? <br> Click here to Register</a>
    </body>
</html>