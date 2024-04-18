<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['phone'] = $_POST['phone'];
    $_SESSION['gender'] = isset($_POST['gender']) ? $_POST['gender'] : ""; 
    $_SESSION['address'] = $_POST['address'];
    header("Location: index1.html");

}



