<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HommeController extends AbstractController
{
    #[Route('/', name: 'home', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('home.html.twig');
    }

    #[Route('/creation-de-compte', name: 'creationDeCompte', methods: ['GET'])]
    public function creationDeCompte(): Response
    {
        return $this->render('user/creationDeCompte.html.twig');
    }
}