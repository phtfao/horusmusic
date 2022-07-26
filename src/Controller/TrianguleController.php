<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use App\Model\Triangule;

class TrianguleController extends AbstractController
{
    /**
     * @Route("/triangule/{a}/{b}/{c}", name="triangule_show", methods={"GET"})
     */
    public function show($a, $b, $c): JsonResponse
    {
        $triangule = new Triangule($a, $b, $c);
        return $this->json($triangule->getInfo());
    }
}
