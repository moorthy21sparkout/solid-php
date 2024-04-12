<?php
interface present
{
    public function pre();
}
interface age
{
    public function persion_age();
}
class school implements present, age
{
    public function pre(){
        echo "the presion is present<br>";
    }
    public function persion_age(){
        echo "the presion is 14";
    }
}
class college implements present{
    public function pre()
    {
        echo "<br>the person is not present ";
    }
}
$obj=new school();
$obj->pre();
$obj->persion_age();
$obj=new college();
$obj->pre();

?>