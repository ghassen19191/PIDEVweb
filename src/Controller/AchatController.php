<?php

namespace App\Controller;

use App\Entity\Achat;

use App\Entity\Achatt ;
use App\Entity\Game;
use App\Form\AchatType;
use App\Repository\AchatRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/achat")
 */
class AchatController extends AbstractController
{
    

    /**
     * @Route("/new/{id}", name="new_achat", methods={"GET", "POST"})
     */
    public function new(Request $request, AchatRepository $achatRepository , $id): Response
    {
        $game=$this->getDoctrine()->getRepository(Game::class)->find($id);
        $achat = new Achat();
        $achat->setCreatedAt();
        $achat->setGame($game);

        $achatRepository->add($achat);
       
            
            
        return $this->redirectToRoute('galery', [], Response::HTTP_SEE_OTHER);
        
    }

    /**
     * @Route("/{id}", name="app_achat_show", methods={"GET"})
     */
    public function show(Achatt $achat): Response
    {
        return $this->render('achat/show.html.twig', [
            'achat' => $achat,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_achat_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Achat $achat, AchatRepository $achatRepository): Response
    {
        $form = $this->createForm(AchatType::class, $achat);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $achatRepository->add($achat);
            return $this->redirectToRoute('app_achat_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('achat/edit.html.twig', [
            'achat' => $achat,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="app_achat_delete", methods={"POST"})
     */
    public function delete(Request $request, Achat $achat, AchatRepository $achatRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$achat->getId(), $request->request->get('_token'))) {
            $achatRepository->remove($achat);
        }

        return $this->redirectToRoute('app_achat_index', [], Response::HTTP_SEE_OTHER);
    }
}
