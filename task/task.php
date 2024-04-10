<html>

<body>

    <h2>Check if a Number is Prime</h2>
    <form method="post" action="<?php ($_SERVER["PHP_SELF"]); ?>">
    <lable for="number"><h3>Enter a number:</h3></label>
    <input type="text" id="number"   name="number">
        <br>
       <h3> <button type="submit">Check</button></h3>
    </form>
</body>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") 
    $number = $_POST["number"];
function checkprime($number)
{
    for($i=2;$i<$number;$i++)
    {
        if($number%$i==0)
        {
            return false;
        }
    }
    return true;
}

$is_prime=checkprime($number);
if($is_prime)
{
    echo "<h3><br>the $number is prime<h3>";
}
else{
    echo "<br> <h3>$number is not prime</h3>";
}




?>

</html>