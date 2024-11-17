<?php

namespace App\Controller;

use App\Entity\Dahiras;
use App\Entity\Encadreur;
use App\Entity\Membres;
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
    public function index(): Response
    {
        $user = $this->getUser();
        if($user === null){
            return $this->redirectToRoute('app_login');
        }
        // Compter les dahiras
          $membreCount = $this->entityManager->getRepository(Membres::class)->count([]);
          if($this->IsGranted('ROLE_USER')){
            $userCount = $this->entityManager->getRepository(User::class)->count(['roles' => 'ROLE_USER']);
          }
          // Compter les dahiras
          $dahiraCount = $this->entityManager->getRepository(Dahiras::class)->count([]);
          // Compter les encadreurs
          $encadreurCount = $this->entityManager->getRepository(Encadreur::class)->count([]);
  
          // Passer les comptages à la vue
          $data = [
              'userCount' => $userCount,
              'membreCount' => $membreCount,
              'dahiraCount' => $dahiraCount,
              'encadreurCount' => $encadreurCount,
          ];

        if ($this->isGranted('ROLE_ADMIN')) {
            // dd("role admin");
            return $this->render('home/dashboard_admin.html.twig', $data);
        }
        
        if ($this->isGranted('ROLE_ENCADREUR')) {
            // dd("role encadreur");
            return $this->render('home/dashboard_encadreur.html.twig', $data);
        }
        
        return $this->render('home/dashboard_admin.html.twig', $data);
    }
}
