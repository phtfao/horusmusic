<?php

namespace App\Model;


class Circle implements Contracts\ShapeInterface
{
    private $type = 'circle';

    public function __construct(private $radius){}

    public function getArea()
    {
        return round(pi() * pow($this->radius, 2), 2);
    }

    public function getPerimeter()
    {
        return round(2 * pi() * $this->radius, 2);
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
