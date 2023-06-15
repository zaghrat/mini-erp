<?php

namespace App\Controller;

use App\Entity\Company;
use App\Entity\MeasuringUnit;
use App\Entity\User;
use App\Form\MeasuringUnitType;
use App\Repository\MeasuringUnitRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MeasuringUnitController extends AbstractController
{
    #[Route('/measuring-unit', name: 'app_measuring_unit_list')]
    public function list(): Response
    {
        $measuringUnits = $this->getUser()->getCompany()->getMeasuringUnits();

        return $this->render('measuring_unit/list.html.twig', [
            'measuring_units' => $measuringUnits,
        ]);
    }

    #[Route('/measuring-unit/new', name: 'app_measuring_unit_add_new')]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        /** @var User $currentUser */
        $currentUser = $this->getUser();
        $company = $currentUser->getCompany();
        $measuringUnit = new MeasuringUnit();
        $measuringUnit->setCompany($company);
        $form = $this->createForm(MeasuringUnitType::class, $measuringUnit);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            /** @var MeasuringUnit $measuringUnit */
            $measuringUnit = $form->getData();
            $measuringUnit->setCompany($company);
            $company->addMeasuringUnit($measuringUnit);

            $entityManager->persist($company);
            $entityManager->persist($measuringUnit);
            $entityManager->flush();

            $this->addFlash(
                'success',
                'Measuring Unit have been added!'
            );
        }

        return $this->renderForm('measuring_unit/new.html.twig', [
            'form'  =>  $form
        ]);
    }


    #[Route(path: '/measuring-unit/delete/{id}', methods: "GET")]
    public function confirmDelete(int $id, MeasuringUnitRepository $repository): Response
    {
        /** @var User $currentUser */
        $currentUser = $this->getUser();
        $company = $currentUser->getCompany();

        $measuringUnit = $repository->findOneBy(['id' => $id, 'company'  => $company]);

        return $this->render('measuring_unit/confirm_delete.html.twig', ['measuringUnit' => $measuringUnit]);
    }

    #[Route(path: '/measuring-unit/delete/{id}', methods: "DELETE")]
    public function delete(int $id, MeasuringUnitRepository $repository, EntityManagerInterface $entityManager): Response
    {

        /** @var User $currentUser */
        $currentUser = $this->getUser();
        $company = $currentUser->getCompany();

        $measuringUnit = $repository->findOneBy(['id' => $id, 'company'  => $company]);
        if (is_object($measuringUnit)) {
            $company->removeMeasuringUnit($measuringUnit);
            $entityManager->persist($company);
            $entityManager->remove($measuringUnit);
            $entityManager->flush();

            $this->addFlash(
                'success',
                'Measuring Unit have been deleted!'
            );
        }
        return new JsonResponse();
    }
}
