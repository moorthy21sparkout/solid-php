<?php

$con = mysqli_connect('localhost', 'root', '', 'users');
mysqli_select_db($con,'user_db');

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


?>
