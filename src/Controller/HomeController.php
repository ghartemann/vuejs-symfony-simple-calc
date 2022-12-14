<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/app/{slug?}", name="app", requirements={"slug"=".+"})")
     */
    public function app(): Response
    {
        return $this->render('app.html.twig');
    }

    /**
     * @Route("/api/helloword/{name}", name="api_helloword")")
     */
    public function apiHelloword(string $name): JsonResponse
    {
        return new JsonResponse('hello ' . $name);
    }
}
