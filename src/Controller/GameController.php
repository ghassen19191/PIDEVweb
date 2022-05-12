<?php

namespace App\Controller;

use App\Form\SearchAnnonceType;
use App\Entity\Game;
use App\Form\GameType;
use App\Repository\GameRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use App\Manager\GameManager;

/**
 * @Route("/game")
 */
class GameController extends AbstractController
{

    /**
     * @Route("/r", name="recherche")
     */
    public function recherche(GameRepository $g , Request $request): Response
    {
        $ress=$request->request->get('motcle');
        $res=$g->search($ress);
       
        
        return $this->render('game/recherche.html.twig', [
            'games' => $res,
        ]);
    }

    



    /**
     * @Route("/prod/{id}", name="show_front", methods={"GET"})
     */
    public function showFront(Game $game): Response
    {
        return $this->render('game/showFront.html.twig', [
            'game' => $game,
        ]);
    }

    /**
     * @Route("/gallery", name="galery", methods={"GET"})
     */
    public function galery(GameRepository $gameRepository): Response
    {

        $games=$this->getDoctrine()->getRepository(Game::class)->findAll();
        return $this->render('game/gallery.html.twig', [
            'games'=>$games
            
        ]);
    }


    /**
     * @Route("/o", name="app_game_index", methods={"GET"})
     */
    public function espaceAdmin(GameRepository $gameRepository): Response
    {
        return $this->render('game/index.html.twig', [
            'games' => $gameRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="app_game_new", methods={"GET", "POST"})
     */
    public function new(Request $request, GameRepository $gameRepository): Response
    {
        $game = new Game();
        $form = $this->createForm(GameType::class, $game);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $file = $game->getPhoto();
            if($file){
                $uploads_directory = $this->getParameter('upload_directory');
                $fileName = md5(uniqid()).'.'.$file->guessExtension(); 
                $file->move(
                    $uploads_directory,
                    $fileName
                );
                $game->setPhoto($fileName);
            }
            else
            {
                $game->setPhoto($game->getPhoto());
            }
            $gameRepository->add($game);
            return $this->redirectToRoute('app_game_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('game/new.html.twig', [
            'game' => $game,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="app_game_show", methods={"GET"})
     */
    public function show(Game $game): Response
    {
        return $this->render('game/show.html.twig', [
            'game' => $game,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_game_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Game $game, GameRepository $gameRepository): Response
    {
        $form = $this->createForm(GameType::class, $game);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $gameRepository->add($game);
            return $this->redirectToRoute('app_game_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('game/edit.html.twig', [
            'game' => $game,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="app_game_delete", methods={"POST"})
     */
    public function delete(Request $request, Game $game, GameRepository $gameRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$game->getId(), $request->request->get('_token'))) {
            $gameRepository->remove($game);
        }

        return $this->redirectToRoute('app_game_index', [], Response::HTTP_SEE_OTHER);
    }






}
