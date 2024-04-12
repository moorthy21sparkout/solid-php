
<h3>JSON Encode</h3>
<?php
$n=array("name"=>"ram","age"=>25,"country"=>"india");
echo json_encode($n);          //associative array ro json formate;
?>

<br>
<?php

$i=array("m1","m2","m3");        //this is the index array of json formate.
echo json_encode($i);   

?>