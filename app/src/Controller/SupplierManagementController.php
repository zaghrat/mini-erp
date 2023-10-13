<?php

namespace App\Controller;

use App\DTO\SupplierDTO;
use App\Entity\Supplier;
use App\Entity\User;
use App\Form\SupplierType;
use App\Repository\SupplierRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/supplier-management')]
class SupplierManagementController extends AbstractController
{
    #[Route('/', name: 'app_supplier_management')]
    public function index(SupplierRepository $supplierRepository): Response
    {
        /** @var User $user */
        $user = $this->getUser();
        $suppliers = $supplierRepository->findBy([
            'company'   => $user->getCompany(),
        ]);

        return $this->render('supplier_management/list.html.twig', [
            'suppliers' => $suppliers,
        ]);
    }

    #[Route('/new', name: 'app_supplier_management_new_entry', methods: ["GET", "POST"])]
    public function newClient(Request $request, EntityManagerInterface $entityManager): Response
    {
        /** @var User $currentUser */
        $currentUser = $this->getUser();
        $company = $currentUser->getCompany();
        $supplier = new Supplier();
        $supplier->setCompany($company);

        $form = $this->createForm(SupplierType::class, $supplier);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            /** @var Supplier $supplier */
            $supplier = $form->getData();
            $supplier->setCompany($company);
            $company->addSupplier($supplier);

            $entityManager->persist($supplier);
            $entityManager->persist($company);
            $entityManager->flush();

            $this->addFlash(
                'success',
                sprintf("Supplier %s has been added!", $supplier->getName())
            );
        }

        return $this->renderForm('supplier_management/new.html.twig', [
            'form' => $form,
        ]);
    }

    #[Route('/edit/{id}', name: 'app_supplier_management_edit_entry', methods: ["GET", "POST"])]
    public function editClient(
        int $id,
        EntityManagerInterface $entityManager,
        Request $request,
        SupplierRepository $supplierRepository
    ): Response {
        /** @var User $currentUser */
        $currentUser = $this->getUser();
        $company = $currentUser->getCompany();
        $supplier = new Supplier();
        $supplier->setCompany($company);

        $supplier = $supplierRepository->findOneBy(['id' => $id, 'company' => $company]);

        $form = $this->createForm(SupplierType::class, $supplier);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            /** @var Supplier $supplier */
            $supplier = $form->getData();
            $supplier->setCompany($company);

            $entityManager->persist($supplier);
            $entityManager->flush();

            $this->addFlash(
                'success',
                sprintf("Supplier %s changes have been saved!", $supplier->getName())
            );
        }

        return $this->renderForm('supplier_management/edit.html.twig', [
            'form'  =>  $form,
            'client' => $supplier,
        ]);
    }

    #[Route(path: '/delete/{id}', methods: "GET")]
    public function confirmDelete(int $id, SupplierRepository $repository): Response
    {
        /** @var User $currentUser */
        $currentUser = $this->getUser();
        $company = $currentUser->getCompany();
        $supplier = $repository->findOneBy(['id' => $id, 'company' => $company]);

        return $this->render('supplier_management/confirm_delete.html.twig', ['supplier' => $supplier]);
    }

    #[Route(path: '/delete/{id}', methods: "DELETE")]
    public function deleteClient(
        int $id,
        SupplierRepository $supplierRepository,
        EntityManagerInterface $entityManager
    ): JsonResponse {
        /** @var User $currentUser */
        $currentUser = $this->getUser();
        $company = $currentUser->getCompany();

        $supplier = $supplierRepository->findOneBy(['id' => $id, 'company' => $company]);
        if ($supplier instanceof Supplier) {
            $company->removeSupplier($supplier);
            $entityManager->persist($company);
            $entityManager->remove($supplier);
            $entityManager->flush();

            $this->addFlash(
                'success',
                sprintf("Supplier %s has been deleted!", $supplier->getName())
            );
        }

        return new JsonResponse();
    }

    #[Route('/{id}', methods: "GET")]
    public function getSupplierInfo(SupplierRepository $supplierRepository, int $id): JsonResponse
    {
        /** @var User $user */
        $user = $this->getUser();
        $data = $supplierRepository->findOneBy(['company' => $user->getCompany(), 'id' => $id]);

        return new JsonResponse([
            'data'  => $data ? new SupplierDTO($data) : null,
        ]);
    }
}
