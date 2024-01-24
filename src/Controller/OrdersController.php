<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Orders;
use App\Entity\OrdersDetails;
use App\Repository\OrdersRepository;
use App\Repository\ProduitRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/commandes', name: 'app_orders_')]
class OrdersController extends AbstractController
{
    #[Route('/ajout', name: 'add')]
    public function add(SessionInterface $session, ProduitRepository $produitRepository, EntityManagerInterface $em): Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER');

        $panier = $session->get('panier', []);
        if ($panier === []) {
            $this->addFlash('message', 'Votre panier est vide');
            return $this->redirectToRoute('home.index');
        }

        //le panier n'est pas vide on crée une commande

        $order = new Orders();
        //on remplis la commande
        $order->setUser($this->getUser());
        $order->setReference(uniqid());
        foreach ($panier as $item => $quantity) {
            $orderDetails = new OrdersDetails();


            //on récupère le produit
            $produit = $produitRepository->find($item);
            
            $prix = $produit->getPrix();

            //on ajoute les détails de la commande

            $orderDetails->setProducts($produit);
            $orderDetails->setPrix($prix);
            $orderDetails->setQuantity($quantity);

            $order->addOrdersDetail($orderDetails);
        }

        // on persist et on flush
        $em->persist($order);
        $em->flush();

        $session->remove('panier');

        $this->addFlash('message', 'Votre commande a bien été enregistrée');
        return $this->redirectToRoute('app_orders_delivery', ['orderId' => $order->getId()]);
        
    }

    #[Route("/order-delivery/{orderId}", name: "delivery")]
    public function orderSummary($orderId, OrdersRepository $ordersRepository , Request $request, EntityManagerInterface $em)
    {
        $user = $this->getUser(); // Récupère l'utilisateur actuellement connecté
        assert($user instanceof User); // Vérifie que l'utilisateur est bien connecté (sinon $user = null
        $numMaison = $user->getNumMaison();
        $nomVoie = $user->getNomVoie();
        $ville = $user->getVille();
        $codePostal = $user->getCodePostale();
        $adresseLivraison1 = $numMaison . ' ' . $nomVoie ;
        $adresseLivraison2 = $ville . ' ' . $codePostal;
        // Récupérez la commande de la base de données
        $order = $ordersRepository->find($orderId);
    
        if (!$order) {
            throw $this->createNotFoundException('La commande demandée n\'existe pas.');
        }
    
        // Récupérez les détails de la commande
        $orderDetails = $order->getOrdersDetails();
    
        // Récupérez l'adresse de livraison de la requête
        $name = $request->query->get('name');
        $address = $request->query->get('address');
        $postalCode = $request->query->get('postalCode');
        $city = $request->query->get('city');
        $deliveryAdress = $request->query->get('deliveryAdress');
        
        // Enregistrez les modifications dans la base de données
        if ($name && $address && $postalCode && $city) {
        $deliveryAdress = $name . ', ' . $address . ', ' . $postalCode . ', ' . $city;
        $order->setDeliveryAdress($deliveryAdress);
        $em->persist($order);
        $em->flush();
    }
        
        // Passez les détails de la commande à la vue
        return $this->render('pages/orders/orderDelivery.html.twig', [
            'order' => $order,
            'orderDetails' => $orderDetails,
            'adresseLivraison1' => $adresseLivraison1,
            'adresseLivraison2' => $adresseLivraison2,
            'codePostal' => $codePostal,
            'ville' => $ville,
            'deliveryAdress' => $deliveryAdress ?? null,
        ]);
    }
    #[Route('/order-summary/{orderId}', name: 'summary' , methods: ['GET'])]
    public function showOrderDetail($orderId , OrdersRepository $ordersRepository , Request $request ,EntityManagerInterface $em): Response
    {
        // Récupérez la commande de la base de données
        $order = $ordersRepository->find($orderId);
    
        // Récupérez les détails de la commande
        $orderDetails = $order->getOrdersDetails();
    
        // Récupérez l'adresse de livraison de la requête
        $name = $request->query->get('name');
        $address = $request->query->get('address');
        $postalCode = $request->query->get('postalCode');
        $city = $request->query->get('city');
        
        // Enregistrez les modifications dans la base de données
        if ($name && $address && $postalCode && $city) {
        $deliveryAdress = $name . ', ' . $address . ', ' . $postalCode . ', ' . $city;
        $order->setDeliveryAdress($deliveryAdress);
        $em->persist($order);
        $em->flush();
    
        }
    
        // Renvoyer la vue du récapitulatif de commande avec les informations de la commande
        return $this->render('pages/orders/orderSummary.html.twig', [
        'order' => $order,
        'orderDetails' => $orderDetails,
        'deliveryAdress' => $deliveryAdress ?? null
        ]);
    }
    
    #[Route('/order-all', name: 'all')]
    public function allOrder( OrdersRepository $ordersRepository): Response
    {
        $user = $this->getUser(); // Récupère l'utilisateur actuellement connecté
        $order = $ordersRepository->findBy(['user' => $user], ['id' => 'DESC']);
    
        $ordersWithDetails = [];
        foreach ($order as $order) {
            $details = $order->getOrdersDetails(); // Récupère les détails de la commande
            $ordersWithDetails[] = [
                'order' => $order,
                'details' => $details
            ];
        }
    
        return $this->render('pages/orders/orderAll.html.twig', [
        'ordersWithDetails' => $ordersWithDetails,
    
        ]);
    }
}
