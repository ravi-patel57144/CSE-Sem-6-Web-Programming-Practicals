<html>
  <head>
    <title>Practical 9</title>
    <style>
      body {
      padding-top: 50px;
      }
      h1,p {
        display: flex;
        justify-content: center;
      }
</style>
  </head>
  <body>
    <h1>Find Maximum and Minimum Value in Array</h1>
    <p>
      <?php
        $numbers = array(3, 5, 2, 8, 9, 1, 4);
        
        // Finding the maximum value
        $max = $numbers[0];
        for ($i = 1; $i < count($numbers); $i++) {
          if ($numbers[$i] > $max) {
            $max = $numbers[$i];
          }
        }
        echo "The maximum value is: " . $max . "<br>";
        
        // Finding the minimum value
        $min = $numbers[0];
        for ($i = 1; $i < count($numbers); $i++) {
          if ($numbers[$i] < $min) {
            $min = $numbers[$i];
          }
        }
        echo "The minimum value is: " . $min;
      ?>
    </p>
  </body>
</html>
