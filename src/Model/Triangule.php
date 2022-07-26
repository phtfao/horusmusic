<?php

namespace App\Model;

class Triangule implements Contracts\ShapeInterface
{
    private $type = 'triangule';

    public function __construct(private $a, private $b, private $c){}

    public function getArea()
    {
        $p = ($this->a + $this->b + $this->c) / 2;
        $area = sqrt($p * ($p - $this->a) * ($p - $this->b) * ($p - $this->c));
        return round($area, 2);
    }

    public function getPerimeter()
    {
        return round(($this->a + $this->b + $this->c), 2);
    }

    public function getInfo()
    {
        return [
            'type' => $this->type,
            'a' => $this->a,
            'b' => $this->b,
            'c' => $this->c,
            'surface' => round($this->getArea(), 2),
            'perimeter' => round($this->getPerimeter(), 2),
        ];
    }
}