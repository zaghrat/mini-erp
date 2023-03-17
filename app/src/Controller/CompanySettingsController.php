<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\CompanySettingsType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CompanySettingsController extends AbstractController
{
    #[Route('/general/settings', name: 'app_company_settings')]
    public function companySettings(): Response
    {
        return $this->render('settings/company_settings/companySettings.html.twig');
    }

    #[Route('/general/settings/edit', name: 'app_edit_company_settings', methods: 'POST')]
    public function editCompanySettings(Request $request, EntityManagerInterface $entityManager): Response
    {
        $errors = [];
        /** @var User $user */
        $user = $this->getUser();
        $company = $user->getCompany();

        $name = $request->request->get('name', null);
        $currency = $request->request->get('currency', null);

        if (empty($name)) {
            $errors[] = 'Company name is a required field';
        }

        if (empty($currency)) {
            $errors[] = 'Currency is a required field';
        }


        if (count($errors)) {
            return $this->json($errors, Response::HTTP_BAD_REQUEST);
        }


        $company
            ->setName($name)
            ->setCurrency($currency)
        ;

        $entityManager->persist($company);
        $entityManager->flush();

        $this->addFlash(
            'success',
            'Your changes were saved!'
        );

        return $this->json($errors, Response::HTTP_OK);
    }
}
