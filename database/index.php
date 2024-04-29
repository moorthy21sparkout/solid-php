<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbName = "tutorial";

$connect = mysqli_connect($servername, $username, $password, $dbName);

if ($connect->connect_errno) {
    echo "Sorry connection is failed";
    exit();
} else {
    echo "connected succesfully ....";
}
?>