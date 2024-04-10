<?php

trait Vehicle
{
    protected $type;
    protected $make;
    protected $model;
    protected $year;

    public function type() 
    {
        return __CLASS__;
    }

    public function make() 
    {
        return $this->make;
    }

    public function model() 
    {
        return $this->model;
    }

    public function year() 
    {
        return $this->year;
    }
}

class firstvehicle
{
    use Vehicle;

    public function __construct($make,  $model,  $year)
    {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }
}

class secoundvechical
{
    use Vehicle;

    public function __construct( $make, $model,  $year)
    {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }
}
$obj = new firstvehicle("honda", "shine", 2012);
echo "Make: " . $obj->make() . "<br>";
echo "Model: " . $obj->model() . "<br>";
echo "Year: " . $obj->year() . "<br>";
$obj = new secoundvechical("hero", "splender", 2010);
echo "Type: " . $obj->type() . "<br>";
echo "Make: " . $obj->make() . "<br>";
echo "Model: " . $obj->model() . "<br>";
echo "Year: " . $obj->year() . "<br>";
echo "Type: " . $obj->type() ;