<?php

namespace App\Controller;

use App\Entity\Presence;
use App\Entity\Reunion;
use App\Form\ReunionType;
use App\Repository\MembresRepository;
use App\Repository\ReunionRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
#[Route('/reunion')]
class ReunionController extends AbstractController
{
    #[Route('/', name: 'app_reunion_index')]
    public function index(ReunionRepository $reunionRepository): Response
    {
        $currentUser = $this->getUser();
        // Si l'utilisateur a le rôle ADMIN
        if(in_array('ROLE_ADMIN', $currentUser->getRoles(), true)){
            $reunion = $reunionRepository->findAll(); 
            // Montre tous les membres
        }else{
        $encadreur = $currentUser->getEncadreur();
        $dahira = $encadreur->getDahiras();
        $reunion = $reunionRepository->findBy(['dahiras' => $dahira], ['date' => 'DESC']);
        }

        return $this->render('reunion/index.html.twig', [
            'reunion' => $reunion,
        ]);
    }

    #[Route('/new', name: 'app_reunion_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, MembresRepository $membresRepository): Response
    {
        $reunion = new Reunion();
        $currentUser = $this->getUser();
        $encadreur = $currentUser->getEncadreur();
        if($this->isGranted('ROLE_ADMIN')){
            return $this->redirectToRoute('app_reunion_index');
         }
        $dahira = $encadreur->getDahiras();
        $membres = $membresRepository->findBy(['dahiras' => $dahira]);

        $form = $this->createForm(ReunionType::class, $reunion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Pour chaque membre, créez une présence
            foreach ($membres as $membre) {
               
                $presence = new Presence();

                $presence->setMembre($membre); 
                $presence->setReunion($reunion); 
                $presence->setDate(new \DateTime());    
                
                // Si la case est cochée pour ce membre, il est présent
                if ($request->request->get('membre_' . $membre->getId())) {
                    $presence->setPresent(true);
                } else {
                    $presence->setPresent(false);
                }
             
                // Persister chaque présence individuellement
                $entityManager->persist($presence);
                $reunion->addPresence($presence);
            }
            
            $reunion->setDahiras($dahira);
            $reunion->setEncadreur($encadreur);
           
            $entityManager->persist($reunion);
            $entityManager->flush();
            return $this->redirectToRoute("app_reunion_index", [], Response::HTTP_SEE_OTHER);
        }

        return $this->render("reunion/new.html.twig", [
            'reunion' => $reunion,
            'form' => $form,
            'membres' => $membres,
        ]);
    }
    
    #[Route('/{id}', name: 'app_reunion_show', methods: ['GET'])]
    public function show(Reunion $reunion): Response
    {
        // Récupérer les présences associées à cette réunion
        $presences = $reunion->getPresences();

        // Passer la réunion et ses présences à la vue
        return $this->render("reunion/show.html.twig", [
            'reunion' => $reunion,
            'presences' => $presences,
        ]);
    }


}