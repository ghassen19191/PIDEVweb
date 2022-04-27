<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NewssrController extends AbstractController
{
    /**
     * @Route("/newssr", name="app_newssr")
     */
    public function index(): Response
    {
        return $this->render('newssr/index.html.twig', [
            'controller_name' => 'NewssrController',
        ]);
    }
}
