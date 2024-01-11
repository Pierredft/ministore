<?php

namespace App\Controller;

use App\Form\UserType;
use App\Form\UserPasswordType;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserController extends AbstractController
{
    /**
     * 
     * @Route("/user", name="app_user")
     */
    #[Route('/user/edition/{id}', name: 'app_user_edit', methods: ['GET', 'POST'])]
    public function edit(UserRepository $userRepository, int $id,Request $request, EntityManagerInterface $manager, UserPasswordHasherInterface $hasher): Response
    {
        $user =$userRepository->findOneBy(["id" => $id]);
        //virifier si l'utilisateur est connecté
        if(!$this->getUser()){
            return $this->redirectToRoute('app_login');
        }
        //virifier si l'utilisateur est le proprietaire du compte
        if($this->getuser() !== $user){
            return $this->redirectToRoute('edit.html.twig');
        }
        //création du fomrulaire
        $form = $this->createForm(UserType::class, $user);

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            // if($hasher->isPasswordValid($user,$form->getData()->getPlainPassword())){
            //     $user=$form->getData();

            $manager->persist($user);
            $manager->flush();

            $this->addFlash(
                'success',
                'Votre compte a bien été modifié !'
            );

            return $this->redirectToRoute('home.index');
            }
            else{
                $this->addFlash(
                    'danger',
                    'Votre mot de passe est incorrect !'
                );
            }

        return $this->render('pages/user/edit.html.twig',[
            'form' => $form->createView(),
        ]);
    }

    #[Route('/user/edition-mot-de-passe/{id}', name: 'app_edit_password', methods: ['GET', 'POST'])]
    public function editPassword(UserRepository $userRepository, int $id, Request $request, EntityManagerInterface $manager, UserPasswordHasherInterface $haser):Response
    {
        //récupération du user par son $id
        $user=$userRepository->findOneBy(["id"=>$id]);
        $form=$this->createForm(UserPasswordType::class, $user);

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            //si le mot de passe est valide
            if($haser->isPasswordValid($user, $form->getData()->getPlainPassword())){
                //on récupère le nouveau mot de passe
                $user->setPassword($haser->hashPassword($user, $form->getData()->getNewPassword()));
                $manager->persist($user);
                $manager->flush();

                $this->addFlash(
                    'success',
                    'Votre mot de passe a bien été modifié !'
                );

                return $this->redirectToRoute('home.index');
            }
            else{
                $this->addFlash(
                    'danger',
                    'Votre mot de passe est incorrect !'
                );
            }
        }

        return $this->render('pages/user/edit_password.html.twig',[
            'form'=>$form->createView()
        ]);
    }
}
