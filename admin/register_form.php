<?php
include('config.php');
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
        $error[]='user already exits  !';
    }
        if($pass != $cpass){
            $error[]='password not match  !';
        }
    
    else{
        $insert="INSERT INTO user_form(name,email,password,user_type) VALUES ('$name','$email','$pass','$user_type')";
    mysqli_query($con,$insert);
    echo mysqli_error($con);
    header('Location:login.php');

    }

};
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redsister form</title>
    <link rel="stylesheet" href="/style.css">

</head>

<body>
    <div class="form_con">
        <form action="" method="post">
            <h3>Regsister Now</h3>
            <?php
            if(isset($error)){
                foreach($error as $error){
                echo '<span class ="error-msg">'.$error.'</span>';
            };
        };


            ?>
            <input type="text" name="name" require placeholder="enter the name">
            <input type="email" name="email" require placeholder="enter the mail">
            <input type="password" name="password" require placeholder="enter the password">
            <input type="password" name="cpassword" require placeholder="enter the conform password"><br>
            <select  name="user_type">
                <option value="user">user</option>
                <option value="admin">admin</option>
            </select><br>
            <div class="sub">
            <input type="submit" name="submit" value="register">
            </div>
           <p>already have a account?<a href="login.php">login</a></p>
        </form>
    </div>

</body>

</html>