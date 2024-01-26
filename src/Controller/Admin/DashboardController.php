<?php

namespace App\Controller\Admin;

use App\Entity\Logo;
use App\Entity\Nav;
use App\Entity\Type;
use App\Entity\Produit;
use App\Service\NavService;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;

class DashboardController extends AbstractDashboardController
{
    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
        $routeBuilder = $this->container->get(AdminUrlGenerator::class);
        $url = $routeBuilder->setController(ProduitCrudController::class)->generateUrl();

        return $this->redirect($url);

        // Option 1. You can make your dashboard redirect to some common page of your backend
        //
        // $adminUrlGenerator = $this->container->get(AdminUrlGenerator::class);
        // return $this->redirect($adminUrlGenerator->setController(OneOfYourCrudController::class)->generateUrl());

        // Option 2. You can make your dashboard redirect to different pages depending on the user
        //
        // if ('jane' === $this->getUser()->getUsername()) {
        //     return $this->redirect('...');
        // }

        // Option 3. You can render some custom template to display a proper dashboard with widgets, etc.
        // (tip: it's easier if your template extends from @EasyAdmin/page/content.html.twig)
        //
        // return $this->render('some/path/my-dashboard.html.twig');
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('MinistoreEval');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linktoRoute('Back to the website', 'fas fa-home', 'home.index');
        yield MenuItem::linkToCrud('Produit', 'fa-solid fa-shop', Produit::class);
        yield MenuItem::linkToCrud('Type', 'fa-solid fa-microchip', Type::class);
        yield MenuItem::linkToCrud('Logo', 'fa-solid fa-images', Logo::class);
        yield MenuItem::linkToCrud('Nav', 'fa-solid fa-images', Nav::class);
    }
}
