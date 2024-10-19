<?php

namespace App\Controller;

use App\Entity\Membres;
use App\Form\MembresType;
use App\Repository\MembresRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/membres')]
final class MembresController extends AbstractController
{
    #[Route(name: 'app_membres_index', methods: ['GET'])]
    public function index(MembresRepository $membresRepository): Response
    {
        return $this->render('membres/index.html.twig', [
            'membres' => $membresRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_membres_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $membre = new Membres();
        $form = $this->createForm(MembresType::class, $membre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($membre);
            $entityManager->flush();

            return $this->redirectToRoute('app_membres_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('membres/new.html.twig', [
            'membre' => $membre,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_membres_show', methods: ['GET'])]
    public function show(Membres $membre): Response
    {
        return $this->render('membres/show.html.twig', [
            'membre' => $membre,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_membres_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Membres $membre, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(MembresType::class, $membre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_membres_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('membres/edit.html.twig', [
            'membre' => $membre,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_membres_delete', methods: ['POST'])]
    public function delete(Request $request, Membres $membre, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$membre->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($membre);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_membres_index', [], Response::HTTP_SEE_OTHER);
    }
}
