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

    /**
     * @Route("/triangule/calculator/{a}/{b}/{c}/{d}/{e}/{f}", name="triangule_sum", methods={"GET"})
     */
    public function calculator($a, $b, $c, $d, $e, $f): JsonResponse
    {
        $triangule1 = new Triangule($a, $b, $c);
        $triangule2 = new Triangule($d, $e, $f);
        return $this->json(ShapeService::calculator($triangule1, $triangule2));
    }
}
