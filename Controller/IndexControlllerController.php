<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class IndexControlllerController extends AbstractController
{
    #[Route('/index/controlller', name: 'app_index_controlller')]
    public function index(): Response
    {
        return $this->render('index_controlller/index.html.twig', [
            'controller_name' => 'IndexControlllerController',
        ]);
    }
}
