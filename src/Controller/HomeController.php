<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use App\Repository\ImageRepository;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'homepage')]
    public function homepage(ImageRepository $imageRepository): Response
    {
        return $this->render('home/index.html.twig', [
            'images' => $imageRepository->findAll()
        ]);
    }
}
