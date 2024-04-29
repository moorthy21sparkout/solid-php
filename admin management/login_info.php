<?php
session_start();
include('data_config.php');

if(isset($_POST["log"])){
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM detalis WHERE username='$username'";
    $result = $connection->query($sql);

    if($result->num_rows >0){
        $row = $result->fetch_assoc();
        if(password_verify($password, $row['password'])){
            $_SESSION['detalis_username'] = $username;
            header("Location: ad_dashboard.php");
        } else {
            echo "Invalid password";
        }
    } else {
        echo "Admin not found";
    }
}
?>