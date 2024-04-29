<?php
include('config.php');
session_start();
if(isset($_POST['submit']))
{
    $name=mysqli_real_escape_string($con,$_POST['name']);
    $email=mysqli_real_escape_string($con,$_POST['email']);
    $pass=md5($_POST['password']);
    $cpass=md5($_POST['cpassword']);
    $user_type=$_POST['user_type'];
    $select="SELECT * FROM user_form WHERE email='$email' && password ='$pass'";

    $result=mysqli_query($con,$select);
    if(mysqli_num_rows($result) > 0){
    $row=mysqli_fetch_array($result);
    if($row['user_type']=='admin'){
        $_SESSION['admin_name']=$row['name'];
        header('Location:dashboard.php');

    }
    if($row['user_type']=='user'){
        $_SESSION['user_name']=$row['name'];
        header('Location:user_page.php');
        
    }else{
        $error[]='incorrect email or password ';
    }


    }    
};
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login form</title>
    <link rel="stylesheet" href="/style.css">

</head>

<body>
    <div class="form_con">
        <form action="" method="post">
            <h3>login Now</h3>
            <?php
            if(isset($error)){
                foreach($error as $error){
                echo '<span class ="error-msg">'.$error.'</span>';
            };
        };
        ?>
           
            <input type="email" name="email" require placeholder="enter the mail">
            <input type="password" name="password" require placeholder="enter the password">
           
           
          
            <input type="submit" name="submit" value="login">
          
           <p>Don't have a account?<a href="register_form.php">register now</a></p>
        </form>
    </div>

</body>

</html>