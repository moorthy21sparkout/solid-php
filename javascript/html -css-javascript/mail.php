<?php
session_start();

use PHPMailer\PHPMailer\PHPMailer;

require_once 'PHPMailer/src/Exception.php';
require_once 'PHPMailer/src/PHPMailer.php';
require_once 'PHPMailer/src/SMTP.php';
$mail = new PHPMailer(true);
try {
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = "moorthyponnusamy2019@gmail.com";
    $mail->Password = "uqfebwjxipvutgrq";
    $mail->SMTPSecure = "tls";
    $mail->Port = 587;

    $mail->setfrom($_SESSION['email']);
    $mail->addAddress("moorthyponnusamy2019@gmail.com");

    $mail->isHTML(true);
    $mail->Subject = "message recivied from:" . $_SESSION['name'];
    $mail->Body = '
    <b>Name:</b> ' . $_SESSION['name'] . '<br>
    <b>Email:</b> ' . $_SESSION['email'] . '<br>
    <b>Phone:</b> ' . $_SESSION['phone'] . '<br>
    <b>Gender:</b> ' . $_SESSION['gender'] . '<br>
    <b>Address:</b> ' . $_SESSION['address'] . '<br>
    <b>Date:</b> ' . $_SESSION['preferred_contact_datetime'] . '<br>
    <b>Type:</b> ' . $_SESSION["contact_type"] . '<br>
    <b>Description:</b> ' . $_SESSION["description"] . '<br>';


    $mail->send();
    if ($mail->send()) {
        echo '<script type="text/javascript">alert("Submission successful")</script>';
    } else {
        echo '<script type="text/javascript">alert("Try again later")</script>';
    }
} catch (Exception $e) {
    echo '<script type="text/javascript">alert("Error: ' . $e->getMessage() . '")</script>';
}
