<?php

namespace App\Controller;

use App\Entity\Company;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MeasuringUnitController extends AbstractController
{
    #[Route('/measuring/unit', name: 'app_measuring_unit_list')]
    public function index(): Response
    {
        $measuringUnits = $this->getUser()->getCompany()->getMeasuringUnits();

        return $this->render('measuring_unit/list.html.twig', [
            'measuring_units' => $measuringUnits,
        ]);
    }
}
