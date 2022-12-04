<?php

namespace App\Controller;

use App\Entity\Film;
use App\Form\FilmType;
use App\Repository\FilmRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FilmController extends AbstractController
{
    #[Route('/listeFilm', name: 'liste_film')]
    public function listeDesFilms(Request $request, FilmRepository $filmRepository): Response
    {
        $films=$filmRepository->findAll();

        return $this->render('film/listeFilm.html.twig', 
            [
            'films'=>$films
            ]);
    }

    #[Route('/ajoutDeFilm', name: 'ajouter_film')]

    public function ajoutDeFilm(Request $request, EntityManagerInterface $em)
    {
        $film=new Film();
        
        $form=$this->createForm(FilmType::class, $film);

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
           $em ->persist($film);
           $film -> setCreerPar($this->getUser()->getUserIdentifier());
           $date = new \DateTime('@'.strtotime('now'));
           $film -> setCreerLe($date);
           $em ->flush();

           return $this->redirectToRoute('liste_film');
  
        }
        return $this->render('film/ajoutFilm.html.twig',
            array(
                'form'=>$form->createView()
                )
            );
    }
    
}
