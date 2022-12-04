<?php

namespace App\Controller;

use App\Entity\Proprietaire;
use App\Form\ProprietaireType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class AuthentificationController extends AbstractController
{
    #[Route('/', name: 'authentification')]
    public function index(AuthenticationUtils $authenticationUtils): Response
    {
        $error = $authenticationUtils->getLastAuthenticationError();
        $last_username = $authenticationUtils->getLastUsername();

        return $this->render('authentification/index.html.twig',[
            'controller_name' => 'AuthentificationController',
            'error'=>$error,
            'last_username'=>$last_username
        ]);
    }

    #[Route('/inscription', name: 'inscription')]
    public function creerCompte(Request $request, EntityManagerInterface $em, UserPasswordHasherInterface $passwordHasher)
    {
        $proprietaire = new Proprietaire();
        $form=$this->createForm(ProprietaireType::class, $proprietaire );

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){ 
           $passwordHashed = $passwordHasher->hashPassword($proprietaire , $proprietaire->getPassword());
           $em ->persist($proprietaire );
           $proprietaire  -> setPassword($passwordHashed);
           $em ->flush();

           return $this->redirectToRoute('authentification');
  
        }
        return $this->render('authentification/inscription.html.twig',[
            'form'=>$form->createView(), 

        ]);
    }

    #[Route('/deconnexion', name: 'deconnexion')]
    public function seDeconnecter()
    {
        $this->getUser().session_destroy();
        return $this->redirectToRoute('authentification');

    }
}
