<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class BurgerController extends AbstractController
{
    #[Route('/burgers', name: 'burger_list')]
    public function list(): Response
    {
        return $this->render('burger/index.html.twig', [
            'controller_name' => 'BurgerController',
        ]);
    }

    #[Route('/burger/{id}', name: 'burger', methods: ['GET'])]
    public function show($id): Response
    {
        return $this->render('burger/indexID.html.twig', [
            'controller_name' => 'BurgerController',
            'id' => $id,
        ]);
    }
}
