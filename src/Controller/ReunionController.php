<?php

namespace App\Controller;

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
    public function new(Request $request){
        dd($request);
    }

}
