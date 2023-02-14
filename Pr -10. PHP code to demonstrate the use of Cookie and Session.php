<?php
// Start a session
session_start();

// Here user="Ravi" and cookie will expire in 15 seconds
setcookie('username', 'Ravi', time() + 15);

// Set a session variable named "email" with the value "ravi@gmail.com"
$_SESSION['email'] = 'ravi@gmail.com';
?>

<html>
<head>
    <title>Cookie and Session</title>
    <style>
        body {
            padding-top: 20px;
        }
        .cookies {
            width: 50%;
            margin: 0 auto;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="cookies">
    <?php
    // Retrieve the value of the "username" cookie
    echo "Username: " . $_COOKIE['username'] . "<br>";

    // Retrieve the value of the "email" session variable
    echo "Email: " . $_SESSION['email'] . "<br>";
    ?>
    </div>
</body>
</html>
