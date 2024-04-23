<?php
session_start();

if (isset($_POST["sub"]))
{
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['phone'] = $_POST['phone'];
    $_SESSION['gender'] = isset($_POST['gender']) ? $_POST['gender'] : $_POST['gender']; 
    $_SESSION['address'] = $_POST['address'];
    header("Location:index1.html");
}
if (isset($_POST["sub_info"]))
{
$_SESSION["preferred_contact_datetime"]= $_POST['preferred_contact_datetime'];
$_SESSION["contact_type"]= isset($_POST['contact_type']) ? $_POST['contact_type'] : array();
$_SESSION["description"]= $_POST['description'];
header("Location: mail.php");
}




