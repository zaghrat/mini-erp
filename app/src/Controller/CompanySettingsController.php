<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\CompanySettingsType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CompanySettingsController extends AbstractController
{
    #[Route('/general/settings', name: 'app_company_settings')]
    public function companySettings(): Response
    {
        /** @var User $user */
        $user = $this->getUser();
        $company = $user->getCompany();

        $form = $this->createForm(CompanySettingsType::class, $company, ['disabled_fields' => true]);

        return $this->render('settings/company_settings/companySettings.html.twig', [
            'form' => $form->createView()
        ]);
    }

    #[Route('/general/settings/edit', name: 'app_edit_company_settings', methods: ['GET', 'POST'])]
    public function editCompanySettings(
        FormFactoryInterface $formFactory,
        Request $request,
        EntityManagerInterface $entityManager
    ): Response {
        $responseCode = Response::HTTP_OK;
        /** @var User $user */
        $user = $this->getUser();
        $company = $user->getCompany();

        $form = $formFactory->createNamed('edit_company_settings_form', CompanySettingsType::class, $company, [
            'disabled_fields' => false,
            'attr'  =>  [
                'id'    => 'edit_company_settings_form',
                'action' => $this->generateUrl('app_edit_company_settings')
            ]
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $company = $form->getData();
            $entityManager->persist($company);
            $entityManager->flush();

            $this->addFlash(
                'success',
                'Your changes have been saved!'
            );
            return new JsonResponse('OK', Response::HTTP_OK);
        }

        if ($form->getErrors(true)->count()) {
            $responseCode = Response::HTTP_INTERNAL_SERVER_ERROR;
        }

        return $this->render('settings/company_settings/companyEditForm.html.twig', [
            'edit_form'  => $form->createView()
        ], new Response('', $responseCode));
    }
}
