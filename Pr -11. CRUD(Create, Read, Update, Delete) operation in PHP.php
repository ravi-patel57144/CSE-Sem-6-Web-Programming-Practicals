<html>
  <head><title>Practical 11</title>
    <style>
        form {
          display: flex;
          flex-direction: column;
          align-items: center;
          margin-top: 30px;
        }

        label {
          font-size: 18px;
          font-weight: bold;
          margin-bottom: 10px;
        }

        input[type="text"],
        input[type="email"],
        input[type="tel"] {
          padding: 10px;
          border: none;
          border-radius: 5px;
          margin-bottom: 20px;
          font-size: 16px;
          width: 300px;
        }

        input[type="submit"] {
          background-color: #4CAF50;
          color: white;
          padding: 10px 20px;
          border: none;
          border-radius: 5px;
          font-size: 16px;
          cursor: pointer;
          margin-right: 10px;
        }

        .btn-group {
          display: flex;
          justify-content: center;
          margin-top: 20px;
        }

        input[type="submit"]:hover {
          background-color: #3e8e41;
        }

        input[type="submit"]:active {
          background-color: #4CAF50;
          transform: translateY(2px);
        }
    </style>
  </head>
  <body>
      <form method="post" action="Pr-11 process.php">
      <label for="student_id">Student ID:</label>
      <input type="text" id="student_id" name="student_id" required>

      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>

      <label for="phone">Phone:</label>
      <input type="tel" id="phone" name="phone" required>

      <div class="btn-group">
        <input type="submit" name="add_student" value="Add Student">
        <input type="submit" name="update_student" value="Update Student">
        <input type="submit" name="delete_student" value="Delete Student">
      </div>
      </form>
  </body> 
</html>

