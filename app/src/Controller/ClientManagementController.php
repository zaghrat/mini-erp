<?php

namespace App\Controller;

use App\Entity\Client;
use App\Entity\Company;
use App\Entity\User;
use App\Form\ClientType;
use App\Repository\ClientRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 *
 */
#[Route('/clients-management')]
class ClientManagementController extends AbstractController
{
    /**
     * @param ClientRepository $clientRepository
     *
     * @return Response
     */
    #[Route('/', name: 'app_client_management')]
    public function index(ClientRepository $clientRepository): Response
    {
        /** @var User $user */
        $user = $this->getUser();
        $company = $user->getCompany();

        $clients = $clientRepository->findBy([
            'company'   => $company,
        ]);

        return $this->render("client_management/list.html.twig", [
            'clients' => $clients,
        ]);
    }

    /**
     * @param Request                $request
     * @param EntityManagerInterface $entityManager
     *
     * @return Response
     */
    #[Route('/new', name: 'app_client_management_new_entry', methods: ["GET", "POST"])]
    public function newClient(Request $request, EntityManagerInterface $entityManager): Response
    {
        /** @var User $currentUser */
        $currentUser = $this->getUser();
        $company = $currentUser->getCompany();
        $client = new Client();
        $client->setCompany($company);

        $form = $this->createForm(ClientType::class, $client);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            /** @var Client $client */
            $client = $form->getData();
            $client->setCompany($company);
            $company->addClient($client);

            $entityManager->persist($client);
            $entityManager->persist($company);
            $entityManager->flush();

            $this->addFlash(
                'success',
                sprintf("Client %s has been added!", $client->getName())
            );
        }

        return $this->renderForm('client_management/new.html.twig', [
            'form' => $form,
        ]);
    }

    /**
     * @param int                    $id
     * @param EntityManagerInterface $entityManager
     *
     * @param Request                $request
     * @param ClientRepository       $clientRepository
     *
     * @return Response
     */
    #[Route('/edit/{id}', name: 'app_client_management_edit_entry', methods: ["GET", "POST"])]
    public function editClient(int $id, EntityManagerInterface $entityManager, Request $request, ClientRepository $clientRepository): Response
    {
        /** @var User $currentUser */
        $currentUser = $this->getUser();
        $company = $currentUser->getCompany();
        $client = new Client();
        $client->setCompany($company);

        $client = $clientRepository->findOneBy(['id' => $id, 'company' => $company]);

        $form = $this->createForm(ClientType::class, $client);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            /** @var Client $client */
            $client = $form->getData();
            $client->setCompany($company);

            $entityManager->persist($client);
            $entityManager->flush();

            $this->addFlash(
                'success',
                sprintf("Client %s changes have been saved!", $client->getName())
            );
        }

        return $this->renderForm('client_management/edit.html.twig', [
            'form'  =>  $form,
            'client' => $client,
        ]);
    }
}
