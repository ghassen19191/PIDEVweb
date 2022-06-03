<?php
namespace App\Controller;

use App\Entity\Game;
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
 * @Route("/mobile/game")
 */
class GameMobileController extends AbstractController
{
    /**
     * @Route("", methods={"GET"})
     */
    public function index(GameRepository $gameRepository): Response
    {
        $games = $gameRepository->findAll();

        if ($games) {
            return new JsonResponse($games, 200);
        } else {
            return new JsonResponse([], 204);
        }
    }

    /**
     * @Route("/add", methods={"POST"})
     */
    public function add(Request $request): JsonResponse
    {
        $game = new Game();

        return $this->manage($game, $request, false);
    }

    /**
     * @Route("/edit", methods={"POST"})
     */
    public function edit(Request $request, GameRepository $gameRepository): Response
    {
        $game = $gameRepository->find((int)$request->get("id"));

        if (!$game) {
            return new JsonResponse(null, 404);
        }

        return $this->manage($game, $request, true);
    }

    public function manage($game, $request, $isEdit): JsonResponse
    {   
        $file = $request->files->get("file");
        if ($file) {
            $imageFileName = md5(uniqid()) . '.' . $file->guessExtension();

            try {
                $file->move($this->getParameter('upload_directory'), $imageFileName);
            } catch (FileException $e) {
                dd($e);
            }
        } else {
            if ($request->get("image")) {
                $imageFileName = $request->get("image");
            } else {
                $imageFileName = "null";
            }
        }
        
        $game->setUp(
            $request->get("name"),
            $request->get("category"),
            $request->get("description"),
            DateTime::createFromFormat("d-m-Y", $request->get("releaseYear")),
            (int)$request->get("price"),
            $imageFileName,
            (int)$request->get("stock")
        );
        
        

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($game);
        $entityManager->flush();

        return new JsonResponse($game, 200);
    }

    /**
     * @Route("/delete", methods={"POST"})
     */
    public function delete(Request $request, EntityManagerInterface $entityManager, GameRepository $gameRepository): JsonResponse
    {
        $game = $gameRepository->find((int)$request->get("id"));

        if (!$game) {
            return new JsonResponse(null, 200);
        }

        $entityManager->remove($game);
        $entityManager->flush();

        return new JsonResponse([], 200);
    }

    /**
     * @Route("/deleteAll", methods={"POST"})
     */
    public function deleteAll(EntityManagerInterface $entityManager, GameRepository $gameRepository): Response
    {
        $games = $gameRepository->findAll();

        foreach ($games as $game) {
            $entityManager->remove($game);
            $entityManager->flush();
        }

        return new JsonResponse([], 200);
    }
    
    /**
     * @Route("/image/{image}", methods={"GET"})
     */
    public function getPicture(Request $request): BinaryFileResponse
    {
        return new BinaryFileResponse(
            $this->getParameter('upload_directory') . "/" . $request->get("image")
        );
    }
    
}
