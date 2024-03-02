<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class Index2Controller extends AbstractController
{
    #[Route('/index2', name: 'app_index2')]
    public function index(): Response
    {
        return $this->render('index2/index.html.twig', [
            'controller_name' => 'Index2Controller',
        ]);
    }
}
