<html>
<body>
    <center>
        <h1>Signin form</h1>
        <br><br><br><br>
        <div style="background-color: aliceblue; width:400px;">
            <br><br>
            <form action="" method="post">
                <div>
                    <label>username</label>
                    <input type="text" name="username" required>
                </div>
                <br><br>
                <div>
                    <label>email</label>
                    <input type="email" name="email" required>
                </div>
                <br><br>
                <div>
                    <label>password</label>
                    <input type="password" name="password" required>
                </div>
                <br><br>
                <div>
                    <input type="submit" value="signin" name="sign">
                </div>
            </form>
        </div>
    </center>
</body>
</html>
<?php
if (isset($_POST["sign"])) {
    $username = $_POST["username"];
    $email=$_POST["email"];
    $password = $_POST["password"];
    
    if ($username != "" &&$email!="" && $password != "" ) {
        $mysqli_connect = "INSERT INTO detalis (username,email,password) VALUES ('$username','$email','$password')";
        if (mysqli_query($connection, $mysqli_connect))
     
        {
            echo "data is stroed";
        } else {
            echo "error :" . mysqli_error($connection);
        }
    } else {
        echo "all file required";
    }
}

header("Location: login.php");
?>
