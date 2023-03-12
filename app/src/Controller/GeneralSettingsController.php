<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GeneralSettingsController extends AbstractController
{
    #[Route('/general/settings', name: 'app_general_settings')]
    public function index(): Response
    {
        return $this->render('general_settings/index.html.twig', [
            'controller_name' => 'GeneralSettingsController',
        ]);
    }
}
