<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserProfileType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use SymfonyCasts\Bundle\ResetPassword\Exception\ResetPasswordExceptionInterface;

class UserProfileController extends AbstractController
{
    #[Route('/user/profile', name: 'app_user_profile')]
    public function index(): Response
    {
        $user = $this->getUser();
        $form = $this->createForm(UserProfileType::class, $user, ['disabled_fields' => true]);

        return $this->renderForm('user_profile/index.html.twig', [
            'form'          =>  $form
        ]);
    }


    #[Route('/user/profile/edit', name: 'app_user_profile_edit', methods: ['GET', 'POST'])]
    public function edit(
        Request $request,
        EntityManagerInterface $entityManager,
        UserPasswordHasherInterface $userPasswordHasher
    ): Response
    {
        /** @var User $user */
        $user = $this->getUser();
        $form = $this->createForm(UserProfileType::class, $user, [
            'disabled_fields' => false,
            'show_password_field' => true
        ]);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $user
                ->setFirstName($form->get('firstName')->getData())
                ->setLastName($form->get('lastName')->getData())
                ->setEmail($form->get('email')->getData())
            ;

            $currentPassword = $form->get('currentPassword')->getData();
            if (!empty($currentPassword)) {
                // 1. verify if current password is valid
                if ($userPasswordHasher->isPasswordValid($user, $currentPassword)) {
                    $password = $form->get('password')->getData();
                    $confirmPassword = $form->get('confirmPassword')->getData();
                    // 2. verify if password and confirm password are identical
                    if ($password === $confirmPassword) {
                        $user->setPassword(
                            $userPasswordHasher->hashPassword(
                                $user,
                                $password
                            )
                        );
                    }
                } else {
                    return $this->render('user_profile/edit.html.twig', [
                        'form'          =>  $form->createView()
                    ], new Response(null, Response::HTTP_BAD_REQUEST));
                }
            }

            $entityManager->persist($user);
            $entityManager->flush();

            $this->addFlash(
                'success',
                'Your changes have been saved!'
            );

            return new JsonResponse('OK', Response::HTTP_OK);
        }

        return $this->renderForm('user_profile/edit.html.twig', [
            'form'          =>  $form
        ]);
    }

}
