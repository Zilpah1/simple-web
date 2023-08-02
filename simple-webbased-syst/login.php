<?php include('const-connect.php');
include_once "header.php";
?>

<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="login-signup">
        <h1 class="text-center">Login</h1>


        <?php
            //Session variables
            if (ISSET($_SESSION['login'])) {
                echo $_SESSION['login'];
                unset($_SESSION['login']);            
            }
            
            ?>

        <!-- Login form -->
        <form action="" method="post" class="text-center">
            Username: <br>
            <input type="text" name="usern" placeholder="Enter your username..."><br><br>
            Password: <br>
            <input type="password" name="pwd" placeholder="Enter Password"><br><br>
            <input type="submit" name="submit" value="Login" class="btn-primary"><br><br>
        </form>
        <!-- Login form ends -->

    </div>
</body>

</html>

<?php
//Form processing

//Check whether submit button is clicked or not
if (ISSET($_POST['submit'])) {

    $username = $_POST['usern'];
    $password =($_POST['pwd']);

    //Check whether user with username and password exists
    $sql = "SELECT * FROM tbl_user WHERE usern = '$username' AND pwd = '$password';";
    
    $res = mysqli_query($conn, $sql); //Execute query
    $count = mysqli_num_rows($res); //Count rows

    if ($count==1) {
        $_SESSION['login'] = "<div class = 'success'>Login successful</div>";
        $_SESSION['user'] = $username;
        header('location: '.SITEURL.'index.php');
    }
    else {
        $_SESSION['login'] = "<div class = 'error'>Username or password is incorrect</div>";
        header('location: '.SITEURL.'login.php');
    }
}