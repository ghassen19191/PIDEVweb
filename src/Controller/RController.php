<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RController extends AbstractController
{
    /**
     * @Route("/r", name="app_r")
     */
    public function index(): Response
    {
        return $this->render('r/index.html.twig', [
            'controller_name' => 'RController',
        ]);
    }
}
