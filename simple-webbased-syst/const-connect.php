<?php

define('SITEURL', 'http://localhost:8080/simple-webbased-syst/');
define('LOCALHOST', 'localhost:3307');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'simpleweb');

$conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD) or die(mysqli_error());
$dbselect = mysqli_select_db($conn, DB_NAME) or die(mysqli_error());