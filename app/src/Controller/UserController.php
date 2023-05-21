<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\AddUserType;
use App\Repository\UserRepository;
use App\Service\EmailSender\AddedUserPasswordEmailSenderService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    #[Route('/users/list', name: 'app_users_list')]
    public function listUsers(UserRepository $repository): Response
    {
        /** @var User $user */
        $user = $this->getUser();
        $company = $user->getCompany();

        return $this->render('usersManagement/usersList.html.twig', [
            'company'   => $company,
            'users'     => $repository->findBy(['company'   =>  $company])
        ]);
    }

    #[Route('/users/add', name: 'app_users_add_new_user')]
    public function addNewUser(
        UserPasswordHasherInterface $userPasswordHasher,
        EntityManagerInterface $entityManager,
        AddedUserPasswordEmailSenderService $emailSenderService,
        UserRepository $userRepository,
        Request $request
    ): Response
    {
        $newUser = new User();
        /** @var User $currentUser */
        $currentUser = $this->getUser();
        $company = $currentUser->getCompany();
        $errors = [];
        $form = $this->createForm(AddUserType::class, $newUser);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $plainPassword =uniqid();
            /** @var User $newUser */
            $newUser = $form->getData();
            $newUser
                ->setPassword($userPasswordHasher->hashPassword($newUser, $plainPassword))
                ->setCompany($company)
                ->setIsVerified(true)
            ;


            if (!$userRepository->findOneBy(['email' => $newUser->getEmail()])) {
                $entityManager->persist($newUser);
                $entityManager->flush();

                $emailSenderService->sendEmail($newUser, $plainPassword);
                return new JsonResponse('', Response::HTTP_CREATED);
            }
            $errors[] = 'EMAIL ALREADY USED';

        }

        return $this->renderForm('usersManagement/addNewUser.html.twig', [
            'form'  =>  $form,
            'errors'    => $errors
        ], new Response('', count($errors) ? Response::HTTP_BAD_REQUEST : Response::HTTP_OK));

    }
}
