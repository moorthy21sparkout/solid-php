<?php
class human
{
    public function man()
    {
        echo "the persion is running ";
    }
}
class ram extends human
{
public function raman()
{
    echo "ram is not running<   br>";
}
}
class kiran extends human
{
    public function kir($n)
    {
            echo "$n is running";
    }
}
$obj=new ram();
$obj->raman();
$obj=new kiran ();
$obj->kir("bro");


?>