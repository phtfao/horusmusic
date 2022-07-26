<?php

namespace App\Service;

use App\Model\Contracts\ShapeInterface;

class ShapeService
{
    public function __construct(private ShapeInterface $shape)
    {

    }

    public function getArea()
    {
        return $this->shape->getArea();
    }

    public function getPerimeter()
    {
        return $this->shape->getPerimeter();
    }

    public function getInfo()
    {
        return $this->shape->getInfo();
    }

    public static function getSumOfAreas(ShapeInterface $shape1, ShapeInterface $shape2)
    {
        return $shape1->getArea() + $shape2->getArea();
    }

    public static function getSumOfPerimeters(ShapeInterface $shape1, ShapeInterface $shape2)
    {
        return $shape1->getPerimeter() + $shape2->getPerimeter();
    }

    public static function calculator(ShapeInterface $shape1, ShapeInterface $shape2)
    {
        return [
            'SumOfArea' => self::getSumOfAreas($shape1, $shape2),
            'SumOfPerimeter' => self::getSumOfPerimeters($shape1, $shape2),
        ];
    }
}