<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class BlogController extends AbstractController
{
    #[Route('/blog', name: 'app_blog')]
    public function index(): Response
    {
        return $this->render('blog/index.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }

    #[Route('/blog/lister', name: 'app_blog_lister')]
    #[Route('/blog/lister/{auteur}', name: 'app_blog_lister_auteur')]
    public function lister($auteur=''): Response
    {
        $articles = [
            ['titre' => 'Le premier article',
                'resume' => 'Résumé du premier article',
                'date_publication' => '2023-03-03',
                'auteur' => 'Meriam'],
            ['titre' => 'Le deuxième article ',
                'resume' => 'Résumé du deuxième article',
                'date_publication' => '2022-05-15',
                'auteur' => 'Ahmed'],
            ['titre' => 'Le troisième article ',
                'resume' => 'Résumé du troisième resume',
                'date_publication' => '2020-03-10',
                'auteur' => 'Nidhal']
            ,];
        return $this->render('blog/lister.html.twig', ['articles' => $articles,'auteur' => $auteur]);
    }
}
