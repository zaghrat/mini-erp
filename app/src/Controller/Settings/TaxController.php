<?php

namespace App\Controller\Settings;

use App\Entity\Tax;
use App\Entity\User;
use App\Form\TaxType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
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

            $entityManager->persist($tax);
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

}
