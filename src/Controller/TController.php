<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

class TController extends AbstractController
{
    /**
     * @Route("/t", name="app_t")
     * @isGranted("ROLE_ADMIN")
     */

    
    public function index(): Response
    {
        return $this->render('t/index.html.twig', [
            'controller_name' => 'TController',
        ]);
    }
}
