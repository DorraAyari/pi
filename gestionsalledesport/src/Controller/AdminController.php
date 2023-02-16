<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
    #[Route('/adminProduit', name: 'app_admin')]
    public function index(): Response
    {
        return $this->render('produit_admin/produit_adm.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }
}
