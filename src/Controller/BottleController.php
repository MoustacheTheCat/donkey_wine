<?php

namespace App\Controller;



use App\Entity\Bottle;
use App\Form\BottleType;
use App\Repository\BottleRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/bottle')]
class BottleController extends AbstractController
{
    #[Route('s', name: 'app_bottle_index')]
    public function index(BottleRepository $bottleRepository): Response
    {
        dump($bottleRepository->findAll());
        return $this->render('bottle/index.html.twig', [
            'bottles' => $bottleRepository->findAll(),
            'page_title' => 'BottleController',
        ]);
    }
    #[Route('/{id<^\d+$>}', name: 'app_bottle_show')]
    public function show(Bottle $bottle): Response
    {
        return $this->render('bottle/show.html.twig', [
            'bottle' => $bottle,
            'page_title' => $bottle->getBottleName()
            
        ]);
    }

    #[Route('/new', name: 'app_bottle_new')]
    public function new(Request $request, EntityManagerInterface $em): Response
    {
    
        $form = $this->createForm(BottleType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($form->getData());
            $em->flush();
            
            return $this->redirectToRoute('app_bottle_index');
        }
        return $this->render('bottle/new.html.twig', [
            'form' => $form,
            'page_title' => 'Add Bottle'
        ]);
    }
    #[Route('/edit/{id<^\d+$>}', name: 'app_bottle_edit')]
    public function edit(Bottle $bottle, Request $request, EntityManagerInterface $em): Response
    {
    
        $form = $this->createForm(BottleType::class, $bottle);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();
            
            return $this->redirectToRoute('app_bottle_index');
        }
        return $this->render('bottle/edit.html.twig', [
            'bottle' => $bottle,
            'form' => $form,
            'page_title' => 'Edit Bottle'
        ]);
    }
    #[Route('/delete/{id<^\d+$>}', name: 'app_bottle_delete')]
    public function delete(Request $request, Bottle $bottle, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$bottle->getId(), $request->request->get('_token'))) {
            $entityManager->remove($bottle);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_bottle_index');
    }
}
