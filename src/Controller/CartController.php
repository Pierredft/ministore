<?php 
namespace App\Controller;

use App\Entity\Produit;
use App\Repository\ProduitRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

    
    #[Route('/cart', name: 'cart_')]
    class CartController extends AbstractController
{

    #[Route('/', name: 'index')]
    public function index(SessionInterface $session, ProduitRepository $produitRepository)
    {
        $panier = $session->get('panier', []);

        // on initialise le tableau qui contiendra les produits
        $data = [];
        $total = 0;

        // on boucle sur le panier pour créer les données à passer à la vue
        foreach($panier as $id => $quantité){
            $produit = $produitRepository->find($id);

            $data[] = [
                'produit' => $produit,
                'quantité' => $quantité
            ];
            $total += $produit->getPrix() * $quantité;
        }
        return $this->render('pages/cart.html.twig',compact('data', 'total'));
    }

        #[Route('/add/{id}', name: 'add')]
        public function add(Produit $produit, SessionInterface $session)
        {
            //on récupere l'id du produit
            $id = $produit->getId();

            //on récupere le panier existant
            $panier = $session->get('panier', []);
            
            //on ajoute le produit dans la session panier si il n'y est pas encore
            //sinon on augmente la quantité
            if(!empty($panier[$id])){
                $panier[$id] =1;
            }else{
                $panier[$id]++;
            }

            $session->set('panier', $panier);
            
            //on redirige vers la page panier
            return $this->redirectToRoute('cart_index');
        }
    

        #[Route('/remove/{id}', name: 'remove')]
        public function remove(Produit $produit, SessionInterface $session)
        {
            //on récupere l'id du produit
            $id = $produit->getId();

            //on récupere le panier existant
            $panier = $session->get('panier', []);
            
            //on retire le produit dans la session panier si il n'y qu'un seul produit
            //sinon on decremente la quantité
            if(!empty($panier[$id])){
                if($panier[$id] > 1){
                    $panier[$id]--;
            }else{
                unset($panier[$id]);
            }
        }

            $session->set('panier', $panier);
            
            //on redirige vers la page panier
            return $this->redirectToRoute('cart_index');
        }

        #[Route('/delete/{id}', name: 'delete')]
        public function delete(Produit $produit, SessionInterface $session)
        {
            //on récupere l'id du produit
            $id = $produit->getId();

            //on récupere le panier existant
            $panier = $session->get('panier', []);
            
            if(!empty($panier[$id])){
                unset($panier[$id]);
            }

            $session->set('panier', $panier);
            
            //on redirige vers la page panier
            return $this->redirectToRoute('cart_index');
        }

        #[Route('/empty', name: 'empty')]
        public function empty(SessionInterface $session)
        {
            $session->remove('panier');
            
            //on redirige vers la page panier
            return $this->redirectToRoute('cart_index');
        }
}

?>