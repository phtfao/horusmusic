<?php

namespace App\Model;

class Circle
{
    private $radius;
    private $type = 'circle';

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function getArea()
    {
        return pi() * pow($this->radius, 2);
    }

    public function getCircumference()
    {
        return 2 * pi() * $this->radius;
    }

    public function getInfo()
    {
        return [
            'type' => $this->type,
            'radius' => $this->radius,
            'surface' => $this->getArea(),
            'circumference' => $this->getCircumference(),
        ];
    }
}