<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class Index3Controller extends AbstractController
{
    #[Route('/index3', name: 'app_index3')]
    public function index(): Response
    {
        return $this->render('index3/index.html.twig', [
            'controller_name' => 'Index3Controller',
        ]);
    }
}
