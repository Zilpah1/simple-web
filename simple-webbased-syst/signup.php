<?php 
include_once "header.php";
include('const-connect.php')
?>

<html>

<head>
    <title>Signup</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="login-signup">
        <h1 class="text-center">Signup</h1>

        <?php
            //Session variables
            if (ISSET($_SESSION['signup'])) {
                echo $_SESSION['signup'];
                unset($_SESSION['signup']);            
            }
            
            ?>

        <form action="" method="post" class="text-center">
            <input type="text" name="name" placeholder="Full Name..." required><br><br>
            <input type="text" name="email" placeholder="Email..." required><br><br>
            <input type="text" name="usern" placeholder="Enter Username..." required><br><br>
            <input type="password" name="pwd" placeholder="Enter Password..." required><br><br>
            <input type="password" name="pwdrepeat" placeholder="Repeat Password..." required><br><br>
            <input type="submit" name="submit" value="Signup" class="btn-primary"><br><br>
        </form>
    </div>

</body>

</html>

<?php
//Form processing

if (ISSET($_POST['submit'])) {
echo "Clicked";

    $name = $_POST['name'];
    $email = $_POST['email'];
    $username = $_POST['usern'];
    $password = $_POST['pwd'];
    $pwdrepeat = ($_POST['pwdrepeat']);

    $sql = "INSERT INTO tbl_user SET 
    name = '$name',
    email = '$email',
    usern = '$username',
    pwd = '$password',
    pwdrepeat = '$pwdrepeat';";

    $res = mysqli_query($conn, $sql) or die(mysqli_error());

    if ($res == true) {
        $_SESSION['signup'] = "<div class = 'success'>Signup successful, you may login...</div>";
        header('location: '.SITEURL.'index.php');
    }
    else {
        $_SESSION['signup'] = "<div class = 'error'>Failed to Signup...</div>";
        header('location: '.SITEURL.'signup.php');
    }


}