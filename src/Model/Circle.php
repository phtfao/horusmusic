<?php

namespace App\Model;


class Circle implements Contracts\ShapeInterface
{
    private $type = 'circle';

    public function __construct(private $radius){}

    public function getArea()
    {
        return pi() * pow($this->radius, 2);
    }

    public function getPerimeter()
    {
        return 2 * pi() * $this->radius;
    }

    public function getInfo()
    {
        return [
            'type' => $this->type,
            'radius' => $this->radius,
            'surface' => $this->getArea(),
            'circumference' => $this->getPerimeter(),
        ];
    }
}
