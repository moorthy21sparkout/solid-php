<?php
session_start();
$mailto="moorthyponnusamy2019@gamil.com";
$from=$_SESSION['email'];
$name= $_SESSION['name'];
$subject="personal information";
$subject2="your message send successfully";
$message= $_SESSION['name'];
$message= $_SESSION['email'] ;
$message=$_SESSION['phone'] ;
$message=$_SESSION['gender'];
$message=$_SESSION['address'];
$message=$_SESSION["preferred_contact_datetime"];
$message=$_SESSION["preferred_contact_type[]"];
$message=$_SESSION["description"];
$message2="dear: ".$_SESSION['name']."thank you for conecting!";
$headers="from: ".$from;
$headers2="from: ".$mailto;
$result1=mail($mailto,$subject,$message,$headers);
$result2=mail($from,$subject2,$message2,$headers2);
if($result1 && $result2)
{
    echo '<script type=t"ext/javascript">alert("submission successfully")</script>';
}
else
{
echo '<script type=t"ext/javascript">alert("try again,try later")</script>';
}
?>

