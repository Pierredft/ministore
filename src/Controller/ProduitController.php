<?php

namespace App\Controller;

use App\Repository\ProduitRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ProduitController extends AbstractController
{
    #[Route('/produit', name: 'app_produit', methods: ['GET'])]
    public function index(ProduitRepository $ProduitRepository): Response
    {
        return $this->render('pages/produit/phone.html.twig', [
            'produits' => $ProduitRepository->findAll(),
        ]);
    }

    #[Route('/produit/{id}', name: 'app_produit_show', methods: ['GET'])]
    public function show(ProduitRepository $ProduitRepository, $id): Response
    {
        $produit = $ProduitRepository->find($id);

        return $this->render('pages/produit/show.html.twig', [
            'produit' => $produit,
        ]);
    }
}
