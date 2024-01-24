<?php

namespace App\Controller;

use App\Entity\Produit;
use App\Repository\TypeRepository;
use App\Repository\ProduitRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class ProduitController extends AbstractController
{
    #[Route('/produit', name: 'app_produit', methods: ['GET'])]
    public function index(ProduitRepository $produitRepository, Request $request, TypeRepository $typeRepository ): Response
    {
        // BEGIN: ed8c6549bwf9
        $tri = $request->query->get('tri');
        $nom = $request->query->get('nom');
        $typeId = $request->query->get('type');
    if ($typeId && $nom) {
        $type = $typeRepository->find($typeId);
        $produit = $produitRepository->findByTypeAndName($type, $nom);
    } elseif ($typeId) {
        $type = $typeRepository->find($typeId);
        $produit = $produitRepository->findByType($type);
    } elseif ($nom) {
        $produit = $produitRepository->findByName($nom);
    } else {
        $produit = $produitRepository->findAll();
    }
        $types = $typeRepository->findAll();

        // Récupérer les produits en fonction de l'ordre de tri sélectionné
        $produits = $produitRepository->findByExampleField('prix', $tri);
        // END: ed8c6549bwf9


        return $this->render('pages/produit/phone.html.twig', [
            'produits' => $produits, 'types' => $types
        ]);
    }

    #[Route('/produit/{id}', name: 'app_produit_show', methods: ['GET'])]
    public function show(ProduitRepository $produitRepository, $id): Response
    {
        $produit = $produitRepository->find($id);

        return $this->render('pages/produit/show.html.twig', [
            'produit' => $produit,
        ]);
    }
}
