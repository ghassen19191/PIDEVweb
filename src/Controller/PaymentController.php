<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Form\PaymentType;
use App\Form\VerificationType;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use App\Entity\Achatt;
use App\Entity\Game;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\GameRepository;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Security\Core\Security;
use Doctrine\Common\Collections\ArrayCollection;
class PaymentController extends AbstractController
{


    public function __construct(Security $security)
    {
       $this->security = $security;
   
      
    }
    /**
     * @Route("/payment", name="app_payment")
     */
    public function index(GameRepository $gameRepository , SessionInterface $session,Request $request , EntityManagerInterface $em ,MailerInterface $mailer ): Response
    {

        $d = new \Datetime('now');
        $dt=$d->format('Y-m');
        $form = $this->createForm(PaymentType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            
    $user = $this->security->getUser();
            
            $code=rand(1000,9999);

            $user->setCode(strval($code));
            $em->flush();
            $email = (new Email())
            ->from('adem.amara@esprit.tn')
            
            ->to($user->getEmail())
            //->cc('cc@example.com')
            //->bcc('bcc@example.com')
            //->replyTo('fabien@example.com')
            //->priority(Email::PRIORITY_HIGH)
            ->subject('your verification code ')
            ->text(strval($code))
            ->html(strval($code));

        $mailer->send($email);

        return $this->redirectToRoute('code');
       
        }
        
        return $this->render('payment/index.html.twig', [
            'controller_name' => 'PaymentController',
            'form'=>$form->createView(),
            'date'=>$dt
        ]);
    }

    /**
     * @Route("/MesAchat", name="MesAchat", methods={"GET"})
     */
    public function MesAchat(): Response
    {
        $achat=$this->getDoctrine()->getRepository(Achatt::class)->findAll();
        
       
        return $this->render('achat/Mesachat.html.twig', [
            'achats' => $achat
        ]);
    }

       /**
     * @Route("/code", name="code")
     */
    public function code(GameRepository $gameRepository , SessionInterface $session,Request $request , EntityManagerInterface $em): Response
    {
      
        $panier = $session->get("panier", []);
        $form = $this->createForm(VerificationType::class);
        $form->handleRequest($request);
        $total=0;
        
        

        if ($form->isSubmitted() && $form->isValid()) {
            $user=$this->getDoctrine()->getRepository(User::class)->find(1);
            if($request->request->get('verification') ['code']==$user->getCode()){

                $Achat=new Achatt();
           
                foreach($panier as $id => $quantite){
                    $game = $gameRepository->find($id);
                    
                    $total += $game->getPrice() * $quantite;
                }
                foreach($panier as $id => $quantite){
                    
                    $game = $gameRepository->find($id);
                    
                    $Achat->addGame($game);    
                }
                $Achat->setPrix($total);
                $em->persist($Achat);
                $em->flush();
                $this->get('session')->getFlashBag()->add(
                    'notice',
                    'Bids are added To your account !'
                );
                $user->setCode(null);
                $em->flush();
                return $this->redirectToRoute('app_r');
            }
            
        }
       
   

        return $this->render('Payment/Verification.html.twig', [
           
            'form'=>$form->createView()
        ]);
    }

   
}
