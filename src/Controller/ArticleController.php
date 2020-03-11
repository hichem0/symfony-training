<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
    /**
     * @Route("/", name="app_hompage")
     */
    public function homepage()
    {
        return $this->render('article/homepage.html.twig');
    }

    /**
     * @Route("/seconde/{slug}", name="article_show")
     */
    public function show($slug)
    {
        $comment = [
            'this article is dosen\'t make any sense'
        ];
        return $this->render('article/show.html.twig', [
            'title' =>ucwords(str_replace('-',' ',$slug)),
            'comments'=> $comment,
        ]);
    }
}