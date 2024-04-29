
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "admin_info";

$connection = mysqli_connect($servername, $username, $password, $dbname);
if ($connection->connect_errno) {
    echo "Sorry connection is failed🚫";
    exit();
} else {
    echo "connected succesfully ....✅";
}

?>
