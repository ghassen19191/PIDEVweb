<?php

namespace App\Controller;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Post;
use App\Form\PostType;
use App\Form\CommentaireType;
use App\Repository\PostRepository;
use App\Repository\CommentaireRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use MercurySeries\FlashyBundle\FlashyNotifier ;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use App\Entity\Commentaire;
/**
 * @Route("/post")
 */
class PostController extends Controller
{
    /**
     * @Route("/", name="app_post_index", methods={"GET"})
     */
    public function index(PostRepository $postRepository, Request $request): Response
    { 
         $allposts= $postRepository->findAll();
        $posts =$this->get('knp_paginator') ->paginate(
        // Doctrine Query, not results
        $allposts,
        // Define the page parameter
        $request->query->getInt('page', 1),
        // Items per page
        5
    );
        return $this->render('post/index.html.twig', [
            'posts' => $posts,
        ]);
    }
/**
     * @Route("/front", name="app_postfront_index", methods={"GET"})
     */
    public function indexFront(PostRepository $postRepository,Request $request): Response
    {$allposts= $postRepository->findAll();
        $posts =$this->get('knp_paginator') ->paginate(
        // Doctrine Query, not results
        $allposts,
        // Define the page parameter
        $request->query->getInt('page', 1),
        // Items per page
        6
    );
        return $this->render('front/post.html.twig', [
            'posts' => $posts,
        ]);
    }
    /**
     * @Route("/new", name="app_post_new", methods={"GET", "POST"})
     */
    public function new( FlashyNotifier $flashy,Request $request, PostRepository $postRepository, EntityManagerInterface $entityManager): Response
    {
        $post = new Post();
        $form = $this->createForm(PostType::class, $post);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
          
                $file = $request->files->get('post')['image'];
                // $file=$jeux->getImagejeux();
                $uploads_directory = $this->getParameter('uploads_directory');
                $filename = md5(uniqid()) . '.' . $file->guessExtension();
                $file->move(
                    $uploads_directory,
                    $filename
                );
                $post->setImage($filename);
                $entityManager->persist($post);
                $entityManager->flush();
                $flashy->primaryDark('Post Created successfully!','#');
               
            return $this->redirectToRoute('app_post_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('post/new.html.twig', [
            'post' => $post,
            'form' => $form->createView(),
        ]);
    
    }

    /**
     * @Route("/{idPost}", name="app_post_show", methods={"GET"})
     */
    public function show(Post $post): Response
    {
        return $this->render('post/show.html.twig', [
            'post' => $post,
        ]);
    }

    /**
     * @Route("/{idPost}/edit", name="app_post_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Post $post, PostRepository $postRepository,  EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(PostType::class, $post);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $file = $request->files->get('post')['image'];
            $uploads_directory = $this->getParameter('uploads_directory');
            $filename = md5(uniqid()) . '.' . $file->guessExtension();
            $file->move(
                $uploads_directory,
                $filename
            );
            $post->setImage($filename);
            $entityManager->persist($post);
            $entityManager->flush();
            return $this->redirectToRoute('app_post_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('post/edit.html.twig', [
            'post' => $post,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idPost}", name="app_post_delete", methods={"POST"})
     */
    public function delete(Request $request, Post $post, PostRepository $postRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$post->getIdPost(), $request->request->get('_token'))) {
            $postRepository->remove($post);
        }

        return $this->redirectToRoute('app_post_index', [], Response::HTTP_SEE_OTHER);
    }
    /**
     * @Route("/s/search", name="search")
     */
    public function searchJeux(Request $request,NormalizerInterface $Normalizer,PostRepository $repository):Response
    {
        $requestString=$request->get('searchValue');
        $Post = $repository->findByNom($requestString);
        $jsonContent = $Normalizer->normalize($Post, 'json',['Groups'=>'Post:read']);
        $retour =json_encode($jsonContent);
        return new Response($retour);

    }
    
     /**
     * @Route("/{idPost}/masquer", name="masquer_evenement")
     */
    public function masquerEvent($idPost): Response
    {
        $post= $this->getDoctrine()->getRepository(Post::class)->find($idPost);
        $post->setEnable(0);
        $entityManager = $this->getDoctrine()->getManager();

        $entityManager->persist($post);
        $entityManager->flush();
        return $this->redirectToRoute('app_post_index', [], Response::HTTP_SEE_OTHER);
    }

    /**
     * @Route("/{idPost}/afficher", name="afficher_evenement")
     */
    public function afficherEvent($idPost):Response
    {
        $post = $this->getDoctrine()->getRepository(Post::class)->find($idPost);
        $post->setEnable(1);
        $entityManager = $this->getDoctrine()->getManager();

        $entityManager->persist($post);
        $entityManager->flush();
        return $this->redirectToRoute('app_post_index', [], Response::HTTP_SEE_OTHER);
    }
    /**
     * @Route("/commentaire/{idPost}", name="app_postcom")
     */
    public function PackItem(Request $request,PostRepository $postRepository, $idPost, CommentaireRepository $commentaireRepository): Response
    {   
        $post = $postRepository->find($idPost); 
        $commentaire = $commentaireRepository->getPostcom($idPost);
        
        $newCommentaire = new Commentaire();
        $form = $this->createForm(CommentaireType::class, $newCommentaire);
    
        $form->handleRequest($request);
        $newCommentaire->setIdPost($post);
        if ($form->isSubmitted() && $form->isValid()) {
            
            $commentaireRepository->add($newCommentaire);
            $newCommentaire->setIdPost($post);
            return $this->redirectToRoute('app_postfront_index', [], Response::HTTP_SEE_OTHER);
        }
       

        return $this->render('post/postitem.html.twig', [
            'commentaire' => $commentaire,
            'post' => $post,
            'form' => $form->createView(),
        ]);
       
        
    }
     /**
     * @Route("/stats", name="stats")
     */
    public function statistiques(PostRepository $categRepo){
        // On va chercher toutes les catégories
        $categories = $categRepo->findAll();

        $categNom = [];
        $categColor = [];
        $categCount = [];

        // On "démonte" les données pour les séparer tel qu'attendu par ChartJS
        foreach($categories as $categorie){
            $categNom[] = $categorie->getAuteur();
           
            
        }

        

        return $this->render('admin/stats.html.twig', [
            'categNom' => json_encode($categNom),
            
            
        ]);
    }
    /**
     * @Route("/s/AfficherPostMobile", name="AfficherPostMobile")
     */
    public function AfficherPostMobile(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $commandes = $em->getRepository(Post::class)->findAll();

        return $this->json($commandes,200,[],['groups'=>'post:read']);

        

    }
    /**
     * @Route("/ajouterpostMobile/new", name="ajouterpostMobile")
     */
    public function ajouterpostMobile(Request $request, NormalizerInterface $Normalizer)
    {
        $em = $this->getDoctrine()->getManager();
        $post = new Post();
        $post->setTitre($request->get('titre'));
        $post->setAuteur($request->get('auteur'));
        $post->setImgPost($request->get('imgPost'));
        //$post->setDatePost($request->get('datePost'));
        $post->setRate($request->get('rate'));
        $post->setImage($request->get('image'));
        $em->persist($post);
        $em->flush();
        $jsonContent = $Normalizer->normalize($post ,'json' ,['groups'=>'post:read']);
        return new Response(json_encode($jsonContent));;

        

    }

    /**
    * @Route("/p/updatePostMobile/{idPost}?titre={titre}&auteur={auteur}&imgPost={img_post}&rate={rate}&image={image}", name="updatePostMobile")
     */
    public function updatePostMobile(Request $request,$idPost ,NormalizerInterface $Normalizer)
    {
        $em = $this->getDoctrine()->getManager();
        $post = $em->getRepository(Post::class)->find($idPost);
        $post->setTitre($request->get('titre'));
        $post->setAuteur($request->get('auteur'));
        $post->setImgPost($request->get('imgPost'));
       
        $post->setRate($request->get('rate'));
        $post->setImage($request->get('image'));
      
        $em->flush();
        $jsonContent = $Normalizer->normalize($post ,'json' ,['groups'=>'post:read']);
        return new Response("information updated".json_encode($jsonContent));;

        

    }
     /**
     * @Route("/deletePostMobile/{idPost}", name="deletePostMobile")
     */
    public function deletePostMobile(Request $request,$idPost ,NormalizerInterface $Normalizer)
    {
        $em = $this->getDoctrine()->getManager();
        $post = $em->getRepository(Post::class)->find($idPost);
  
        $em->remove($post);
        $em->flush();
        $jsonContent = $Normalizer->normalize($post ,'json' ,['groups'=>'post:read']);
        return new Response("information deleted".json_encode($jsonContent));;

        

    }
     
}
