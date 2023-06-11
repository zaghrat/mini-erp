<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\AddUserType;
use App\Repository\UserRepository;
use App\Service\EmailSender\AddedUserPasswordEmailSenderService;
use Doctrine\ORM\EntityManagerInterface;
use phpDocumentor\Reflection\Types\This;
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

    #[Route('/users/edit/{id}', name: 'app_users_edit_user')]
    public function editUser(
        int $id,
        UserRepository $userRepository,
        Request $request,
        EntityManagerInterface $entityManager
    ): Response
    {
        /** @var User $currentUser */
        $currentUser = $this->getUser();
        $company = $currentUser->getCompany();

        $user = $userRepository->findOneBy(['id' => $id, 'company' => $company]);
        if ($user) {
            $form = $this->createForm(AddUserType::class, $user);
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
                $user = $form->getData();
                $entityManager->persist($user);
                $entityManager->flush();
                $this->addFlash(
                    'success',
                    'Your changes have been saved!'
                );
            }
            return $this->renderForm('usersManagement/editUser.html.twig', ['form'  =>  $form, 'user' => $user]);
        }


        return $this->renderView('usersManagement/userNotFound.html.twig');
    }


    #[Route('/users/confirm-delete/{id}', name: 'app_user_confirm_sssdelete')]
    public function confirmDelete(
        UserRepository $userRepository,
        int $id
    ): Response
    {
        /** @var User $currentUser */
        $currentUser = $this->getUser();
        $company = $currentUser->getCompany();

        $user = $userRepository->findOneBy(['id' => $id, 'company' => $company]);
        return $this->render('usersManagement/confirmDelete.html.twig', ['user' => $user]);
    }


    #[Route('/users/delete/{id}', name: 'app_users_delete_user')]
    public function deleteUser(EntityManagerInterface $entityManager, UserRepository $userRepository, int $id): Response
    {
        /** @var User $currentUser */
        $currentUser = $this->getUser();
        $company = $currentUser->getCompany();

        $user = $userRepository->findOneBy(['id' => $id, 'company' => $company]);

        if ($user) {
            $entityManager->remove($user);
            $entityManager->flush();

            $this->addFlash(
                'success',
                'User has been deleted!'
            );

            return new JsonResponse();
        }
    }
}
