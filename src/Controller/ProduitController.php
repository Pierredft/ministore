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
    public function index(ProduitRepository $produitRepository, Request $request, TypeRepository $typeRepository): Response
    {
        $nom = $request->query->get('nom');
        $typeId = $request->query->get('type');
        $order = $request->query->get('order');
        
    if ($typeId && $nom) {
        $type = $typeRepository->find($typeId);
        $produits = $produitRepository->findByTypeAndName($type, $nom, $order);
    } elseif ($typeId) {
        $type = $typeRepository->find($typeId);
        $produits = $produitRepository->findByType($type, $order);
    } elseif ($nom) {
        $produits = $produitRepository->findByName($nom, $order);
    } else {
        $produits = $produitRepository->findAll($order);
    }
        $types = $typeRepository->findAll();
        // $tri = $request->query->get('tri');
        // $nom = $request->query->get('nom');
        // $typeId = $request->query->get('type');

        // $produits = [];

        // if ($typeId && $nom) {
        //     $type = $typeRepository->find($typeId);
        //     $produits = $produitRepository->findByTypeAndName($type, $nom);
        // } elseif ($typeId) {
        //     $type = $typeRepository->find($typeId);
        //     $produits = $produitRepository->findByType($type);
        // } elseif ($nom) {
        //     $produits = $produitRepository->findByName($nom);
        // } else {
        //     $produits = $produitRepository->findAll();
        // }

        // $types = $typeRepository->findAll();

        // // Récupérer les produits en fonction de l'ordre de tri sélectionné
        // if ($tri) {
        //     // Replace 'findByExampleField' with the appropriate method based on your requirements
        //     $produits = $produitRepository->findByExampleField('prix', $tri);
        // }

        // // Filtrer les produits par type
        // if ($typeId) {
        //     $produits = array_filter($produits, function ($p) use ($typeId) {
        //         return $p->getType()->getId() === $typeId;
        //     });
        // }

        return $this->render('pages/produit/products.html.twig', [
            'produits' => $produits,
            'types' => $types,
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
