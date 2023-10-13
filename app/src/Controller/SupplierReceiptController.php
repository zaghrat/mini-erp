<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SupplierReceiptController extends AbstractController
{
    #[Route('/supplier/receipt', name: 'app_supplier_receipt')]
    public function index(): Response
    {
        return $this->render('supplier_receipt/index.html.twig', [
            'controller_name' => 'SupplierReceiptController',
        ]);
    }
}
