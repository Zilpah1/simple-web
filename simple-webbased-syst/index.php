<?php
include_once "header.php";
?><br><br>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body class="text-center">
    <?php
            //Session variables
            if (ISSET($_SESSION['login'])) {
                echo $_SESSION['login'];
                unset($_SESSION['login']);            
            }

            if (ISSET($_SESSION['signup'])) {
                echo $_SESSION['signup'];
                unset($_SESSION['signup']);            
            }
            
            ?><br><br>
    <img src="pic1.jpg" alt="dog image">
    <p>Welcome to our website, <br>we sell dogs, <br>connect sellers to <br>potential buyers <br>and much more. <br>Feel
        free to reach out
    </p>
</body>

</html>