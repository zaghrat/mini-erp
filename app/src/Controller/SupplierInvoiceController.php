<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SupplierInvoiceController extends AbstractController
{
    #[Route('/supplier/invoice', name: 'app_supplier_invoice')]
    public function index(): Response
    {
        return $this->render('supplier_invoice/index.html.twig', [
            'controller_name' => 'SupplierInvoiceController',
        ]);
    }
}
