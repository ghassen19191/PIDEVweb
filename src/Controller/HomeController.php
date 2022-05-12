<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * Home
     *
     * @Route("", name="home_index")
     * 
     * @return Response
     */
    public function index()
    {
        return $this->render('home/index.html.twig');
    }
    /**
     * @Route("/", name="app_home")
     */
    public function index1() 
    {
        $games=$this->getDoctrine()->getRepository(Game::class)->findAll();
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'games'=>$games
        ]);
    }
    /**
     * @Route("/map", name="app_map")
     */
    public function index2()
    {
        return $this->render('map/index.html.twig', [
            'controller_name' => 'MapController',
        ]);
    }
}