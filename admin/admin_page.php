<?php
include 'config.php';
session_start();
if(!isset($_SESSION['admin name'])){
    header("Location:login.php");
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <div class="container">

        <div class="content">
            <div>
                <h1>welcome <span><?php echo $_SESSION['admin name']?></span></h1>
            </div>
            <div>
                <p>this is an admin page</p>
            </div><br>
            <div> <a href="login.php" class="i">login</a></div><br>
            <div><a href="register_form.php" class="i">Rgsister now</a></div><br>
            <div><a href="logout.php" class="i">logout</a>
            </div>

        </div>

    </div>
</body>

</html>