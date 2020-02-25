<?php


namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController
{
    /**
     * @Route("/")
     */
    public function homepage()
    {
        return new Response('omg my firt page in symfony');
    }

    /**
     * @Route("/seconde/{slug}")
     */
    public function show($slug)
    {
        return new Response(sprintf(
            'my seconde Page: %s', $slug
        ));
    }
}