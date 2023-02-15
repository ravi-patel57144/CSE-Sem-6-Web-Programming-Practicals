<html>
  <head>
    <title>Practical 12</title>
        <style>
            body {
              padding-top: 20px;
            }
            h2 {
              display: flex;
              justify-content: center;
            }
            table, th, td {
                border: 1px solid black;
                border-collapse: collapse;
                text-align: center;
            }
            table.center {
                margin-left: auto; 
                margin-right: auto;
            }
            table{
                width: 70%;
            }
            .form-container {
                width: 80%;
                margin: 0 auto;
                padding: 10px;
                border: 1px solid #ccc;
                border-radius: 20px;
            }
            label {
                font-weight: bold;
                margin-top: 10px;
                display: block;
            }

            input[type="file"] {
                width: 100%;
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
<h2> PHP code to read data from text file </h2>
<div class="form-container">
<form method="post">
    <label for="filename">Enter the file name:</label>
    <input type="file" name="filename" id="filename">
    <button type="submit">Submit</button>
</form>
<div>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the file name from the form input field
    $filename = $_POST['filename'];

// Set the file name and path to your text file
// $filename = 'example.txt';

// Open the file for reading
$handle = fopen($filename, 'r');

// Initialize an empty array to store the data
$data = array();

// Loop through the file, reading each line
while (($line = fgets($handle)) !== false) {
    // Trim any leading or trailing whitespace
    $line = trim($line);
    
    // Split the line into an array using a delimiter (e.g. comma, tab, etc.)
    $row = explode(',', $line);
    
    // Add the row to the data array
    $data[] = $row;
}

// Close the file
fclose($handle);

// Start the HTML table
echo '<table class="center">';

// Loop through the data array and output each row as a table row
foreach ($data as $row) {
    echo '<tr>';
    
    // Loop through each value in the row and output it as a table cell
    foreach ($row as $value) {
        echo '<td>' . $value . '</td>';
    }
    
    echo '</tr>';
}
}
// Close the HTML table
echo '</table>';
?>

</body>
</html>