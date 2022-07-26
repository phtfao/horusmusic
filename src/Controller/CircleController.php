<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use App\Model\Circle;

class CircleController extends AbstractController
{
    private $circle;

    /**
     * @Route("/circle/{radius}", name="circle_show", methods={"GET"})
     */
    public function show($radius): JsonResponse
    {
        $this->circle = new Circle($radius);
        return $this->json($this->circle->getInfo());
    }
}
