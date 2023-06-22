<?php

namespace App\Controller\Settings;

use App\Entity\Company;
use App\Entity\User;
use App\Entity\VAT;
use App\Form\VatType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/settings/vat')]
class VatController extends AbstractController
{
    #[Route('', name: 'app_settings_vat')]
    public function list(): Response
    {
        /** @var Company $company */
        $company = $this->getUser()->getCompany();
        return $this->render('settings/vat/list.html.twig', [
            'vatList' => $company->getVATs(),
            'taxList' => 'VatController',
        ]);
    }

    #[Route('/new')]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        /** @var User $currentUser */
        $currentUser = $this->getUser();
        $company = $currentUser->getCompany();
        $vat = new VAT();
        $vat->addCompany($company);

        $form = $this->createForm(VatType::class, $vat);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            /** @var VAT $vat */
            $vat = $form->getData();
            $vat->addCompany($company);

            $entityManager->persist($vat);
            $entityManager->flush();

            $this->addFlash(
                'success',
                'VAT has been added!'
            );
        }

        return $this->renderForm('settings/vat/new.html.twig', [
            'form' => $form
        ]);
    }
}
