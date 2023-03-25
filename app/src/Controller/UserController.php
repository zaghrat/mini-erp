<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    #[Route('/user/list', name: 'app_user_list')]
    public function index(UserRepository $repository): Response
    {
        /** @var User $user */
        $user = $this->getUser();
        $company = $user->getCompany();
        return $this->render('user/usersList.html.twig', [
            'users' => $repository->findBy(['company'   =>  $company])
        ]);
    }
}
