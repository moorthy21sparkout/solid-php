<!-- Find the number which is repeated more times:
Ex:

arr = [1,3,5,7,1,2,3,1,9,1,2]

output : 1 -->
<?php
$n=array(1,3,5,7,1,2,3,1,9,1,2);
$counts=array_count_values($n);
arsort($counts);
$output=key($counts);
echo "output value is :".$output;
?>
