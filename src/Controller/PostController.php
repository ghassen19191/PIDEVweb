<?php

namespace App\Controller;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Post;
use App\Form\PostType;
use App\Repository\PostRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use MercurySeries\FlashyBundle\FlashyNotifier ;

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
}
