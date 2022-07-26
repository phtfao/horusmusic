<?php

namespace App\Model;

class Triangule implements Contracts\ShapeInterface
{
    private $type = 'triangule';

    public function __construct(private $a, private $b, private $c){}

    public function getArea()
    {
        $p = ($this->a + $this->b + $this->c) / 2;
        return sqrt($p * ($p - $this->a) * ($p - $this->b) * ($p - $this->c));
    }

    public function getPerimeter()
    {
        return $this->a + $this->b + $this->c;
    }

    public function getInfo()
    {
        return [
            'type' => $this->type,
            'a' => $this->a,
            'b' => $this->b,
            'c' => $this->c,
            'surface' => $this->getArea(),
            'circumference' => $this->getPerimeter(),
        ];
    }
}