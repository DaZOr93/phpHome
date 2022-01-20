<?php

class Figure
{
    protected $type;


    public function getType()
    {
        return $this->type;
    }

    public function getSquare()
    {

    }

    public function getPerimeter()
    {

    }

}

class Circle extends Figure
{
    public function __construct($radius)
    {
        $this->type = "Круг";
        $this->radius = $radius;

    }

    public function getSquare()
    {
        return 3.14 * $this->radius ** 2;
    }

    public function getPerimeter()
    {
        return 3.14 * $this->radius * 2;
    }
}

$circle = new Circle(5);
echo "Фигура: ", $circle->getType(), ", площадь: ", $circle->getSquare(), " периметр: ", $circle->getPerimeter(),"<br>";

class Triangle extends Figure
{
    public function __construct($a, $b, $c)
    {
        $this->type = "Треугольник";
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    public function getSquare()
    {

        $p = $this->getPerimeter() / 2;
        return sqrt($p * ($p - $this->a) * ($p - $this->b) * ($p - $this->c));
    }

    public function getPerimeter()
    {
        return $this->a + $this->b + $this->c;
    }
}
$triangle = new Triangle(5,3,4);
echo "Фигура: ", $triangle->getType(), ", площадь: ", $triangle->getSquare(), " периметр: ", $triangle->getPerimeter(),"<br>";


class Square extends Figure
{
    public function __construct($a, $b)
    {
        $this->type = "Квадрат";
        $this->a = $a;
        $this->b = $b;
    }

    public function getSquare()
    {

        return $this->a * $this->b;
    }

    public function getPerimeter()
    {
        return ($this->a + $this->b)*2;
    }
}
$square = new Square(5,3);
echo "Фигура: ", $square->getType(), ", площадь: ", $square->getSquare(), " периметр: ", $square->getPerimeter(),"<br>";

?>