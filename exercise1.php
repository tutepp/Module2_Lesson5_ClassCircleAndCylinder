<?php
class Circle{
    public $name;
    public $radius;
    public $color;
    public function __construct($name,$color,$radius){
        $this->name = $name;
        $this->radius = $radius;
        $this->color = $color;
    }
    public function calculateArea()
    {
        return pi() * pow($this->radius,2);
    }
    public function __toString()
    {
        return "Shape: ".$this->name.","."color: " .$this->color.","." "."Radius: "." ".$this->radius.","."Area: ".$this->calculateArea();
    }
}

class Cylinder extends Circle
{
    public $height;
    public function __construct($name,$color,$radius,$height)
    {
    parent::__construct($name,$color,$radius);
    $this->height = $height;
    }
    public function cylinderArea()
    {
    return pi() * ($this->radius *$this->radius)*$this->height;
    }

    public function __toString()
    {
        return "Shape: ".$this->name.","."color: " .$this->color.","." "."Radius: "." ".$this->radius.","." ".$this->height.","."Area: ".$this->cylinderArea();
    }
}
$circle = new Circle('Circle',"Pink",3 );
$cylinder = new Cylinder('Cylinder',"Pink",3,4 );
echo $circle->__toString();
echo $cylinder->__toString();



