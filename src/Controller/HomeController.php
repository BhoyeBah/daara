<?php

namespace App\Controller;

use App\Entity\Dahiras;
use App\Entity\Encadreur;
use App\Entity\Membres;
use App\Entity\Reunion;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

class HomeController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    #[Route('/', name: 'app_home')]
    #[IsGranted('IS_AUTHENTICATED_FULLY')]
    public function index(): Response
    {
        // Compter les dahiras
          $membreCount = $this->entityManager->getRepository(Membres::class)->count([]);
          if($this->IsGranted('ROLE_USER')){
            $userCount = $this->entityManager->getRepository(User::class)->count(['roles' => 'ROLE_USER']);
          }
          // Compter les dahiras
          $dahiraCount = $this->entityManager->getRepository(Dahiras::class)->count([]);
          // Compter les encadreurs
          $encadreurCount = $this->entityManager->getRepository(Encadreur::class)->count([]);
          $reunionCount = $this->entityManager->getRepository(Reunion::class)->count([]);
  
          // Passer les comptages à la vue
          $data = [
              'userCount' => $userCount,
              'membreCount' => $membreCount,
              'dahiraCount' => $dahiraCount,
              'encadreurCount' => $encadreurCount,
              'reunionCount' => $reunionCount,
          ];

        if ($this->isGranted('ROLE_ADMIN')) {
            // dd("role admin");
            return $this->render('home/dashboard_admin.html.twig', $data);
        }
        
        if ($this->isGranted('ROLE_ENCADREUR')) {
            $user = $this->getUser();
            $encadreur = $user->getEncadreur();
            $dahira = $encadreur->getDahiras();
        
            $membreCount = $this->entityManager->getRepository(Membres::class)->count(['dahiras' => $dahira]);
            $reunionCount = $this->entityManager->getRepository(Reunion::class)->count(['dahiras' => $dahira]);
        
            // Préparer les données pour le rendu
            $dataDahira = [
                'dahira' => $dahira,
                'membreCount' => $membreCount,
                'reunionCount' => $reunionCount,
            ];
        
            return $this->render('home/dashboard_encadreur.html.twig', $dataDahira);
        }
        
        
        return $this->render('home/dashboard_admin.html.twig', $data);
    }
}
