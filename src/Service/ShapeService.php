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
}