<?php

// src/Controller/ArticleWikiController.php
namespace App\Controller;

use App\Entity\ArticleWiki;
use App\Repository\ArticleWikiRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleWikiController extends AbstractController
{
    /**
     * @Route("/article", name="article_wiki")
     */
    public function article(ArticleWikiRepository $articlewikiRepository): Response
    {

        $repository = $this->getDoctrine()->getRepository(ArticleWiki::class);

        // look for *all* ArticleWiki objects
        $articlewiki = $repository->findAll();

        return $this->render('pages/article.html.twig', [
            'articles' => $articlewiki,
        ]);
    }
}
