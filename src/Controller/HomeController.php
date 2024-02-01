<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\{HttpFoundation\Response, Routing\Attribute\Route};

#[Route('/', name: 'home.')]
class HomeController extends AbstractController
{
    #[Route('', name: 'index')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'Accueil',
        ]);
    }
}
