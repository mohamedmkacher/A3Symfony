<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class GammeController extends AbstractController
{
    #[Route('/gamme', name: 'app_gamme')]
    public function index(): Response
    {
        return $this->render('gamme/index.html.twig', [
            'controller_name' => 'GammeController',
        ]);
    }

    #[Route('/gamme/lister', name: 'app_gamme_lister')]
    public function lister(): Response
    {
        $gammes = ['ordinateurs', 'video projecteurs', 'imprimantes', 'accessoires'];
        return $this->render('gamme/lister.html.twig', ['gammes' => $gammes],
        );
    }

}
