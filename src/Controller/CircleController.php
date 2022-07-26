<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\ShapeService;
use App\Model\Circle;

class CircleController extends AbstractController
{
    private Circle $circle;
    private ShapeService $shapeService;

    /**
     * @Route("/circle/{radius}", name="circle_show", methods={"GET"})
     */
    public function show($radius): JsonResponse
    {
        $this->circle = new Circle($radius);
        $this->shapeService = new ShapeService($this->circle);
        return $this->json($this->shapeService->getInfo());
    }

    /**
     * @Route("/circle/calculator/{radius1}/{radius2}", name="circle_sum", methods={"GET"})
     */
    public function calculator($radius1, $radius2): JsonResponse
    {
        $circle1 = new Circle($radius1);
        $circle2 = new Circle($radius2);
        return $this->json(ShapeService::calculator($circle1, $circle2));
    }
}
