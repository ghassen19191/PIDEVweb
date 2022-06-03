<?php

namespace App\Controller;

use App\Entity\Reclamation;
use App\Form\ReclamationType;
use App\Form\Reclamation1Type;
use App\Repository\ReclamationRepository;
use Dompdf\Dompdf;
use Dompdf\Options;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use MercurySeries\FlashyBundle\FlashyNotifier ;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

/**
 * @Route("/reclamation")
 */
class ReclamationController extends AbstractController
{
    /**
     * @Route("/", name="app_reclamation_index", methods={"GET"})
     */
    public function index(ReclamationRepository $reclamationRepository): Response
    {$reclamation= $reclamationRepository->findAll();
        $nbrprest=0.0 ;
       foreach($reclamation as $reclamation){
        
            $nbrprest+=1;
        }
        return $this->render('reclamation/index.html.twig', [
            'reclamations' => $reclamationRepository->findAll(),'nbrprest' => $nbrprest
        ]);
    }

    /**
     * @Route("/new", name="app_reclamation_new", methods={"GET", "POST"})
     */
    public function new(FlashyNotifier $flashy,Request $request, ReclamationRepository $reclamationRepository): Response
    {
        $reclamation = new Reclamation();
        $form = $this->createForm(Reclamation1Type::class, $reclamation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $reclamationRepository->add($reclamation);
            $flashy->success('Reclamation sended successfully!');
            return $this->redirectToRoute('app_reclamation_new', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('reclamation/new.html.twig', [
            'reclamation' => $reclamation,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idRec}", name="app_reclamation_show", methods={"GET"}, requirements={"idRec":"\d+"})
     */
    public function show(Reclamation $reclamation): Response
    {
        return $this->render('reclamation/show.html.twig', [
            'reclamation' => $reclamation,
        ]);
    }

    /**
     * @Route("/{idRec}/edit", name="app_reclamation_edit", methods={"GET", "POST"}, requirements={"idRec":"\d+"})
     */
    public function edit(Request $request, Reclamation $reclamation, ReclamationRepository $reclamationRepository): Response
    {
        $form = $this->createForm(ReclamationType::class, $reclamation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $reclamationRepository->add($reclamation);
            return $this->redirectToRoute('app_reclamation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('reclamation/edit.html.twig', [
            'reclamation' => $reclamation,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idRec}", name="app_reclamation_delete", methods={"POST"}, requirements={"idRec":"\d+"})
     */
    public function delete(Request $request, Reclamation $reclamation, ReclamationRepository $reclamationRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$reclamation->getIdRec(), $request->request->get('_token'))) {
            $reclamationRepository->remove($reclamation);
        }

        return $this->redirectToRoute('app_reclamation_index', [], Response::HTTP_SEE_OTHER);
    }

    /**
     * @Route ("/printallreclamations", name="print_reclamations", requirements={"id":"\d+"})
     */
    public function exportAllReclamationsPDF(ReclamationRepository $repo)
    {
        // Configure Dompdf according to your needs
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');
        $pdfOptions->setIsRemoteEnabled(true);

        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);
        $reclamations = $repo->findAll();
        
        $dompdf->setOptions($pdfOptions);
        $dompdf->output();


        $html = $this->renderView(
            'reclamation/print.html.twig',
            [
                'reclamations' => $reclamations
            ]
        );

        // Load HTML to Dompdf
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
        $dompdf->setPaper('A4', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();

        $fn = sprintf('reclamation%s.pdf', date('c'));
        // Output the generated PDF to Browser (force download)
        $dompdf->stream($fn, [
            "Attachment" => true
        ]);
    }
    /**
     * @Route("/s/AfficherRecMobile", name="AfficherRecMobile")
     */
    public function AfficherRecMobile(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $commandes = $em->getRepository(Reclamation::class)->findAll();

        return $this->json($commandes,200,[],['groups'=>'post:read']);

        

    }
    /**
     * @Route("/ajouterrecMobile/new", name="ajouterrecMobile")
     */
    public function ajouterrecMobile(Request $request, NormalizerInterface $Normalizer)
    {
        $em = $this->getDoctrine()->getManager();
        $post = new Reclamation();
        $post->setNomRec($request->get('nomRec'));
        $post->setDescriRec($request->get('descriRec'));
        $post->setTraite($request->get('traite'));
        
        $em->persist($post);
        $em->flush();
        $jsonContent = $Normalizer->normalize($post ,'json' ,['groups'=>'post:read']);
        return new Response(json_encode($jsonContent));;

        

    }

    
     /**
     * @Route("/deleteRecMobile/{idRec}", name="deleteRecMobile")
     */
    public function deletePostMobile(Request $request,$idRec ,NormalizerInterface $Normalizer)
    {
        $em = $this->getDoctrine()->getManager();
        $post = $em->getRepository(Post::class)->find($idRec);
  
        $em->remove($post);
        $em->flush();
        $jsonContent = $Normalizer->normalize($post ,'json' ,['groups'=>'post:read']);
        return new Response("information deleted".json_encode($jsonContent));;

        

    }
}
