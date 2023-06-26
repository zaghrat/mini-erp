<?php

namespace App\Controller\Settings;

use App\Entity\Company;
use App\Entity\User;
use App\Entity\VAT;
use App\Form\VatType;
use App\Repository\VATRepository;
use Doctrine\ORM\EntityManagerInterface;
use Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
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
        $vat->setCompany($company);

        $form = $this->createForm(VatType::class, $vat);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            /** @var VAT $vat */
            $vat = $form->getData();
            $vat->setCompany($company);

            $entityManager->persist($vat);
            $entityManager->flush();

            $this->addFlash(
                'success',
                sprintf("VAT %s%% has been added!", $vat->getValue() * 100)
            );
        }

        return $this->renderForm('settings/vat/new.html.twig', [
            'form' => $form
        ]);
    }

    #[Route('/edit/{id}', name: 'app_settings_vat_edit')]
    public function edit(int $id, EntityManagerInterface $entityManager, Request $request): Response
    {
        /** @var Company $company */
        $company = $this->getUser()->getCompany();
        $vatEntry = $entityManager->getRepository(VAT::class)->findOneBy(['id' => $id, 'company' => $company]);

        $form = $this->createForm(VatType::class, $vatEntry);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            /** @var VAT $vatEntry */
            $vatEntry = $form->getData();
            $vatEntry->setCompany($company);

            $entityManager->persist($company);
            $entityManager->persist($vatEntry);
            $entityManager->flush();

            $this->addFlash(
                'success',
                sprintf("VAT %s%% changes have been saved!", $vatEntry->getValue() * 100)
            );
        }

        return $this->renderForm('settings/vat/edit.html.twig', [
            'form'  =>  $form,
            'vatEntry' => $vatEntry
        ]);
    }

    /**
     * @throws Exception
     */
    #[Route(path: '/delete/{id}', methods: "GET")]
    public function confirmDelete(int $id, VATRepository $repository): Response
    {
        /** @var User $currentUser */
        $currentUser = $this->getUser();
        $company = $currentUser->getCompany();

        $vatEntry = $repository->findOneBy(['id' => $id, 'company' => $company]);

        return $this->render('settings/vat/confirm_delete.html.twig', ['vatEntry' => $vatEntry]);
    }

    #[Route(path: '/delete/{id}', methods: "DELETE")]
    public function delete(int $id, VATRepository $repository, EntityManagerInterface $entityManager): Response
    {

        /** @var User $currentUser */
        $currentUser = $this->getUser();
        $company = $currentUser->getCompany();

        $vatEntry = $repository->findOneBy(['id' => $id, 'company' => $company]);
        if (is_object($vatEntry)) {
            $company->removeVAT($vatEntry);
            $entityManager->persist($company);
            $entityManager->remove($vatEntry);
            $entityManager->flush();

            $this->addFlash(
                'success',
                sprintf("VAT %s%% has been deleted!", $vatEntry->getValue() * 100)
            );
        }
        return new JsonResponse();
    }
}
