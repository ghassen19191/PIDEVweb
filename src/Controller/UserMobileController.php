<?php
namespace App\Controller;

use App\Entity\User;
use App\Repository\UserRepository;
use DateTime;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

/**
 * @Route("/mobile/user")
 */
class UserMobileController extends AbstractController
{
    /**
     * @Route("", methods={"GET"})
     */
    public function index(UserRepository $userRepository): Response
    {
        $users = $userRepository->findAll();

        if ($users) {
            return new JsonResponse($users, 200);
        } else {
            return new JsonResponse([], 204);
        }
    }

    /**
     * @Route("/add")
     */
    public function add(Request $request): JsonResponse
    {
        $user = new User();

        return $this->manage($user, $request, false);
    }

    /**
     * @Route("/edit", methods={"POST"})
     */
    public function edit(Request $request, UserRepository $userRepository): Response
    {
        $user = $userRepository->find((int)$request->get("id"));

        if (!$user) {
            return new JsonResponse(null, 404);
        }

        return $this->manage($user, $request, true);
    }

    public function manage($user, $request, $isEdit): JsonResponse
    {
        if (!$isEdit) {
            $checkEmail = $this->getDoctrine()->getRepository(User::class)
                ->findOneBy(["email" => $request->get("email")]);

            if ($checkEmail) {
                return new JsonResponse("Email already exist", 203);
            }
        }
        
        $user->setUp(
            $request->get("firstName"),
            $request->get("lastName"),
            $request->get("email"),
            $request->get("username"),
            $request->get("roles"),
            $request->get("password"),
            DateTime::createFromFormat("d-m-Y", $request->get("createdAt"))
        );


        if (!$isEdit) {
            $email = $user->getEmail();
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                try {
                    $transport = new \Swift_SmtpTransport('smtp.gmail.com', 465, 'ssl');
                    $transport->setUsername('screwrightswingers@gmail.com')->setPassword('ydkbpymldlctablu');
                    $mailer = new \Swift_Mailer($transport);
                    $message = new \Swift_Message('Welcome');
                    $message->setFrom(array('screwrightswingers@gmail.com' => 'Bienvenu'))
                        ->setTo(array($email))
                        ->setBody("<h1>Bienvenu a notre application</h1>", 'text/html');
                    $mailer->send($message);
                } catch (\Exception $exception) {
                    return new JsonResponse(null, 405);
                }
            }
        }

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($user);
        $entityManager->flush();

        return new JsonResponse($user, 200);
    }

    /**
     * @Route("/delete", methods={"POST"})
     */
    public function delete(Request $request, EntityManagerInterface $entityManager, UserRepository $userRepository): JsonResponse
    {
        $user = $userRepository->find((int)$request->get("id"));

        if (!$user) {
            return new JsonResponse(null, 200);
        }

        $entityManager->remove($user);
        $entityManager->flush();

        return new JsonResponse([], 200);
    }

    /**
     * @Route("/deleteAll", methods={"POST"})
     */
    public function deleteAll(EntityManagerInterface $entityManager, UserRepository $userRepository): Response
    {
        $users = $userRepository->findAll();

        foreach ($users as $user) {
            $entityManager->remove($user);
            $entityManager->flush();
        }

        return new JsonResponse([], 200);
    }

    /**
     * @Route("/verif", methods={"POST"})
     */
    public function verif(Request $request, UserRepository $userRepository, UserPasswordEncoderInterface $passwordEncoder): Response
    {
        $user = $userRepository->findOneBy(["email" => $request->get("email")]);

        if ($user) {
            if ($passwordEncoder->isPasswordValid($user, $request->get("password"))) {
                return new JsonResponse($user, 200);
            } else {
                return new JsonResponse("user found but pass wrong", 203);
            }
        } else {
            return new JsonResponse([], 204);
        }
    }
}
