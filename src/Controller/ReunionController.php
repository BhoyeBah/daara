<?php

namespace App\Controller;

use App\Entity\Reunion;
use App\Form\ReunionType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
#[Route('/reunion')]
class ReunionController extends AbstractController
{
    #[Route('/', name: 'app_reunion_index')]
    public function index(): Response
    {
        return $this->render('reunion/index.html.twig', [
            'controller_name' => 'ReunionController',
        ]);
    }

    #[Route('/new', name: 'app_reunion_new', methods: ['GET', 'POST'])]
    public function new(Request $request,EntityManagerInterface $entityManager): Response
    {
        $reunion = new Reunion();
    
        $form = $this->createForm(ReunionType::class, $reunion);
        $form->handleRequest($request);
    
        if($form->isSubmitted() && $form->isValid()){
           
            $entityManager->persist($reunion);
            $entityManager->flush();

            return $this->redirectToRoute("app_reunion_index", [], Response::HTTP_SEE_OTHER);
        }

        return $this->render("reunion/new.html.twig",[
            'reunion' => $reunion,
            'form' => $form,
        ]);
        
    }

}
