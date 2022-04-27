<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ReclrController extends AbstractController
{
    /**
     * @Route("/reclr", name="app_reclr")
     */
    public function index(): Response
    {
        return $this->render('reclr/index.html.twig', [
            'controller_name' => 'ReclrController',
        ]);
    }
}
