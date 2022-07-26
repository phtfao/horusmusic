<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\ShapeService;
use App\Model\Triangule;

class TrianguleController extends AbstractController
{
    private Triangule $triangule;
    private ShapeService $shapeService;
    /**
     * @Route("/triangule/{a}/{b}/{c}", name="triangule_show", methods={"GET"})
     */
    public function show($a, $b, $c): JsonResponse
    {
        $this->triangule = new Triangule($a, $b, $c);
        $this->shapeService = new ShapeService($this->triangule);
        return $this->json($this->shapeService->getInfo());
    }
}
