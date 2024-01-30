<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class JulienController extends AbstractController
{
    #[Route('/julien', name: 'app_julien')]
    public function index(): Response
    {
        return $this->render('julien/index.html.twig', [
            'controller_name' => 'JulienController',
        ]);
    }
    #[Route('/Moncv', name: 'app_Moncv')]
    public function cv(): Response
    {
        return $this->render('julien/Moncv.html.twig', [
            'controller_name' => 'JulienController',
        ]);
    }
    #[Route('/portfolio', name: 'app_portfolio')]
    public function portfolio(): Response
    {
        return $this->render('julien/portfolio.html.twig', [
            'controller_name' => 'JulienController',
        ]);
    }
    #[Route('/ensavoirplus', name: 'app_ensavoirplus')]
    public function ensavoirplus(): Response
    {
        return $this->render('julien/ensavoirplus.html.twig', [
            'controller_name' => 'JulienController',
        ]);
    }
}

