<?php

namespace App\Controller;

use App\Repository\LogoRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

namespace App\Controller;

use App\Repository\LogoRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LogoController extends AbstractController
{
    public function index(LogoRepository $logoRepository): Response
    {
        $logo = $logoRepository->findAll();
        return $this->render('partials/_header.html.twig', [
            'logos' => $logo,
        ]);
    }
}
