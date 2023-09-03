<?php

namespace App\Controller\Settings;

use App\Entity\Company;
use App\Entity\Tax;
use App\Entity\User;
use App\Form\TaxType;
use App\Repository\TaxRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/settings/tax')]
class TaxController extends AbstractController
{
    #[Route('', name: 'app_settings_tax')]
    public function index(): Response
    {
        return $this->render('settings/tax/list.html.twig', [
            'taxes' => $this->getUser()->getCompany()->getTaxes(),
        ]);
    }

    #[Route('/new')]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        /** @var User $currentUser */
        $currentUser = $this->getUser();
        $company = $currentUser->getCompany();
        $tax = new Tax();
        $tax->setCompany($company);

        $form = $this->createForm(TaxType::class, $tax);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            /** @var Tax $tax */
            $tax = $form->getData();
            $tax->setCompany($company);
            $company->addTax($tax);

            $entityManager->persist($tax);
            $entityManager->persist($company);
            $entityManager->flush();

            $this->addFlash(
                'success',
                sprintf("Tax %s%% has been added!", $tax->getName())
            );
        }

        return $this->renderForm('settings/tax/new.html.twig', [
            'form' => $form
        ]);
    }

    /**
     * @param int                    $id
     * @param EntityManagerInterface $entityManager
     * @param Request                $request
     *
     * @return Response
     */
    #[Route('/edit/{id}', name: 'app_settings_tax_edit')]
    public function edit(int $id, EntityManagerInterface $entityManager, Request $request): Response
    {
        /** @var Company $company */
        $company = $this->getUser()->getCompany();
        $vatEntry = $entityManager->getRepository(Tax::class)->findOneBy(['id' => $id, 'company' => $company]);

        $form = $this->createForm(TaxType::class, $vatEntry);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            /** @var Tax $taxEntry */
            $taxEntry = $form->getData();
            $taxEntry->setCompany($company);

            $entityManager->persist($company);
            $entityManager->persist($taxEntry);
            $entityManager->flush();

            $this->addFlash(
                'success',
                sprintf("Tax [%s] changes have been saved!", $taxEntry->getName())
            );
        }

        return $this->renderForm('settings/tax/edit.html.twig', [
            'form'  =>  $form,
            'taxEntry' => $vatEntry
        ]);
    }

    #[Route(path: '/delete/{id}', methods: "GET")]
    public function confirmDelete(int $id, TaxRepository $repository): Response
    {
        /** @var User $currentUser */
        $currentUser = $this->getUser();
        $company = $currentUser->getCompany();

        $taxEntry = $repository->findOneBy(['id' => $id, 'company' => $company]);

        return $this->render('settings/tax/confirm_delete.html.twig', ['taxEntry' => $taxEntry]);
    }

    #[Route(path: '/delete/{id}', methods: "DELETE")]
    public function delete(int $id, TaxRepository $repository, EntityManagerInterface $entityManager): Response
    {

        /** @var User $currentUser */
        $currentUser = $this->getUser();
        $company = $currentUser->getCompany();

        $taxEntry = $repository->findOneBy(['id' => $id, 'company' => $company]);
        if (is_object($taxEntry)) {
            $company->removeTax($taxEntry);
            $entityManager->persist($company);
            $entityManager->remove($taxEntry);
            $entityManager->flush();

            $this->addFlash(
                'success',
                sprintf("Tax [%s] has been deleted!", $taxEntry->getName())
            );
        }
        return new JsonResponse();
    }
}
