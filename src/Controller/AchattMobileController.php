<?php
namespace App\Controller;

use App\Entity\Achatt;
use App\Repository\AchattRepository;
use App\Repository\GameRepository;
use DateTime;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/mobile/achatt")
 */
class AchattMobileController extends AbstractController
{
    /**
     * @Route("", methods={"GET"})
     */
    public function index(AchattRepository $achattRepository): Response
    {
        $achatts = $achattRepository->findAll();

        if ($achatts) {
            return new JsonResponse($achatts, 200);
        } else {
            return new JsonResponse([], 204);
        }
    }

    /**
     * @Route("/add", methods={"POST"})
     */
    public function add(Request $request, GameRepository $gameRepository): JsonResponse
    {
        $achatt = new Achatt();

        return $this->manage($achatt, $gameRepository,  $request, false);
    }

    /**
     * @Route("/edit", methods={"POST"})
     */
    public function edit(Request $request, AchattRepository $achattRepository, GameRepository $gameRepository): Response
    {
        $achatt = $achattRepository->find((int)$request->get("id"));

        if (!$achatt) {
            return new JsonResponse(null, 404);
        }

        return $this->manage($achatt, $gameRepository, $request, true);
    }

    public function manage($achatt, $gameRepository, $request, $isEdit): JsonResponse
    {   
        $game = $gameRepository->find((int)$request->get("game"));
        if (!$game) {
            return new JsonResponse("game with id " . (int)$request->get("game") . " does not exist", 203);
        }
        
        
        $achatt->setUp(
            (int)$request->get("prix"),
            $game
        );
        
        

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($achatt);
        $entityManager->flush();

        return new JsonResponse($achatt, 200);
    }

    /**
     * @Route("/delete", methods={"POST"})
     */
    public function delete(Request $request, EntityManagerInterface $entityManager, AchattRepository $achattRepository): JsonResponse
    {
        $achatt = $achattRepository->find((int)$request->get("id"));

        if (!$achatt) {
            return new JsonResponse(null, 200);
        }

        $entityManager->remove($achatt);
        $entityManager->flush();

        return new JsonResponse([], 200);
    }

    /**
     * @Route("/deleteAll", methods={"POST"})
     */
    public function deleteAll(EntityManagerInterface $entityManager, AchattRepository $achattRepository): Response
    {
        $achatts = $achattRepository->findAll();

        foreach ($achatts as $achatt) {
            $entityManager->remove($achatt);
            $entityManager->flush();
        }

        return new JsonResponse([], 200);
    }
    
}
