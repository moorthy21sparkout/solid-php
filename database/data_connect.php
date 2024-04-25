<?php
require("index.php");
?>
<html>
<tital>
    <h3>form</h3>
</tital>

<body>
    <form action="data_connect.php" method="post">
        <table>
            <tr>
                <td>name</td>
                <td><input type="text" name="name"></td>
            <tr>
                <td>password</td>
                <td><input type="password" name="password"></td>
            <tr>
                <td>age</td>
                <td><input type="num" name="age"></td>
            <tr>
                <td><input type="submit" name="submit" value="save data"></td>
            </tr>
        </table>
    </form>
    <?php
    if (isset($_POST["submit"])) {
        $name = $_POST["name"];
        $password = $_POST["password"];
        $age = $_POST["age"];
        if ($name != "" && $password != "" && $age != "") {
            $mysqli_connect = "INSERT INTO members (username,userpass,userage) VALUES ('$name','$password','$age')";
            if (mysqli_query($connect, $mysqli_connect))
            //mysqli_query is must be include the two parameters fist is server and anothr is declear the variable name .
            {
                echo "data is stroed";
            } else {
                echo "error :" . mysqli_error($connect);
            }
        } else {
            echo "all file required";
        }
    }

    ?>
</body>

</html>