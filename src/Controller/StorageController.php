<?php

namespace App\Controller;


use App\Entity\Storage;
use App\Form\StorageType;
use App\Repository\StorageRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/storage')]
class StorageController extends AbstractController
{
    #[Route('s', name: 'app_storage_index')]
    public function index(StorageRepository $storageRepository): Response
    {
        return $this->render('storage/index.html.twig', [
            'storages' => $storageRepository->findAll(),
            'page_title' => 'Storages',
        ]);
    }
    
    #[Route('/{id<^\d+$>}', name: 'app_storage_show')]
    public function show(Storage $storage): Response
    {
        return $this->render('storage/show.html.twig', [
            'storage' => $storage,
            'page_title' => $storage->getStorageName()
            
        ]);
    }

    #[Route('/new', name: 'app_storage_new')]
    public function new(Request $request, EntityManagerInterface $em): Response
    {
    
        $form = $this->createForm(StorageType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($form->getData());
            $em->flush();
            
            return $this->redirectToRoute('app_storage_index');
        }
        return $this->render('storage/new.html.twig', [
            'form' => $form,
            'page_title' => 'Add Storage'
        ]);
    }
    #[Route('/edit/{id<^\d+$>}', name: 'app_storage_edit')]
    public function edit(Storage $storage, Request $request, EntityManagerInterface $em): Response
    {
    
        $form = $this->createForm(StorageType::class, $storage);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();
            
            return $this->redirectToRoute('app_storage_index');
        }
        return $this->render('storage/edit.html.twig', [
            'storage' => $storage,
            'form' => $form,
            'page_title' => 'Edit Storage'
        ]);
    }
    #[Route('/delete/{id<^\d+$>}', name: 'app_storage_delete')]
    public function delete(Request $request, Storage $storage, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$storage->getId(), $request->request->get('_token'))) {
            $entityManager->remove($storage);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_storage_index');
    }
}

