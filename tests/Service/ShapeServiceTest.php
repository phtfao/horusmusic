<?php

namespace App\Tests\Service;

use PHPUnit\Framework\TestCase;
use App\Service\ShapeService;
use App\Model\Triangule;
use App\Model\Circle;

class ShapeServiceTest extends TestCase
{
    /*
    public function getArea();
    public function getPerimeter();
    public function getInfo();
    */
    public function testCircleAreaOfRadius3MustBe28Dot27(): void
    {
        $circle = new Circle(3);
        $shapeService = new ShapeService($circle);
        $this->assertEquals(28.27, $shapeService->getArea());
    }

    public function testCircunferenceOfRadius3MustBe18Dot85(): void
    {
        $circle = new Circle(3);
        $shapeService = new ShapeService($circle);
        $this->assertEquals(18.85, $shapeService->getPerimeter());
    }

    public function testCircunferenceInfo(): void
    {
        $circle = new Circle(3);
        $shapeService = new ShapeService($circle);
        $arrExpectedCircleInfo = [
            'type' => 'circle',
            'radius' => 3,
            'surface' => 28.27,
            'circumference' => 18.85,
        ];
        $this->assertEquals($arrExpectedCircleInfo, $shapeService->getInfo());
    }

    public function testTrianguleAreaOfSides3And4And5MustBe6(): void
    {
        $triangule = new Triangule(3, 4, 5);
        $shapeService = new ShapeService($triangule);
        $this->assertEquals(6, $shapeService->getArea());
    }

    public function testTriangulePerimeterOfSides3And4And5MustBe12(): void
    {
        $triangule = new Triangule(3, 4, 5);
        $shapeService = new ShapeService($triangule);
        $this->assertEquals(12, $shapeService->getPerimeter());
    }

    public function testTrianguleInfo(): void
    {
        $triangule = new Triangule(3, 4, 5);
        $shapeService = new ShapeService($triangule);
        $arrExpectedTrianguleInfo = [
            'type' => 'triangule',
            'a' => 3,
            'b' => 4,
            'c' => 5,
            'surface' => 6,
            'perimeter' => 12,
        ];
        $this->assertEquals($arrExpectedTrianguleInfo, $shapeService->getInfo());
    }

    public function testSumOfAreaOfCircle3AndCircle4MustBe78Dot54(): void
    {
        $circle1 = new Circle(3);
        $circle2 = new Circle(4);        
        $this->assertEquals(78.54, ShapeService::getSumOfAreas($circle1, $circle2));
    }

    public function testSumOfPerimeterOfCircle3AndCircle4MustBe13Dot98(): void
    {
        $circle1 = new Circle(3);
        $circle2 = new Circle(4);
        $this->assertEquals(43.98, ShapeService::getSumOfPerimeters($circle1, $circle2));
    }

    function testSumOfAreaOfTwoTriangulesOfSides3And4And5And6And7And8MustBe26Dot33(): void
    {
        $triangule1 = new Triangule(3, 4, 5);
        $triangule2 = new Triangule(6, 7, 8);
        $this->assertEquals(26.33, ShapeService::getSumOfAreas($triangule1, $triangule2));
    }

    function testSumOfPerimeterOfTwoTriangulesOfSides3And4And5And6And7And8MustBe33(): void
    {
        $triangule1 = new Triangule(3, 4, 5);
        $triangule2 = new Triangule(6, 7, 8);
        $this->assertEquals(33, ShapeService::getSumOfPerimeters($triangule1, $triangule2));
    }

    function testSumOfAreaOfCircle3AndTrianguleOfSides3And4And5MustBe34Dot27(): void
    {
        $circle = new Circle(3);
        $triangule = new Triangule(3, 4, 5);
        $this->assertEquals(34.27, ShapeService::getSumOfAreas($circle, $triangule));
    }

    function testSumOfPerimeterOfCircle3AndTrianguleOfSides3And4And5MustBe30Dot85(): void
    {
        $circle = new Circle(3);
        $triangule = new Triangule(3, 4, 5);
        $this->assertEquals(30.85, ShapeService::getSumOfPerimeters($circle, $triangule));
    }
}
