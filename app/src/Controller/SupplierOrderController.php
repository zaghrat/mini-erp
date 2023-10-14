<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\ArticleRepository;
use App\Repository\SupplierOrderRepository;
use App\Repository\SupplierRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/supplier/order')]
class SupplierOrderController extends AbstractController
{
    #[Route('', name: 'app_supplier_order_list')]
    public function list(SupplierOrderRepository $supplierOrderRepository): Response
    {
        /** @var User $user */
        $user = $this->getUser();
        $supplierOrders = $supplierOrderRepository->findBy(['company' => $user->getCompany()]);

        return $this->render('supplier_order/list.html.twig', ['supplierOrders' => $supplierOrders]);
    }

    #[Route('/new', name: 'app_supplier_order_new')]
    public function newSupplierOrder(SupplierRepository $supplierRepository): Response
    {
        /** @var User $user */
        $user = $this->getUser();



        return $this->render('supplier_order/new.html.twig', []);
    }

    #[Route('/supplier-list', methods: "GET")]
    public function getListOfSuppliers(SupplierRepository $supplierRepository): Response
    {
        /** @var User $user */
        $user = $this->getUser();

        return $this->render('supplier_order/listOfSuppliers.html.twig', [
            'suppliersList' => $supplierRepository->findBy(['company' => $user->getCompany()])
        ]);
    }

    #[Route('/article-list/{id}', methods: "GET")]
    public function getListOfArticles(int $id, ArticleRepository $articleRepository): Response
    {
        /** @var User $user */
        $user = $this->getUser();

        return $this->render('supplier_order/listOfArticles.html.twig', [
            'articlesList' => $articleRepository->findBy(['company' => $user->getCompany()]),
            'rowIndex'    => $id
        ]);
    }
}
