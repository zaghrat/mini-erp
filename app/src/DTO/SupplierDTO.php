<?php

namespace App\DTO;

use App\Entity\Supplier;

class SupplierDTO
{
    public ?int $id;
    public ?string $name;
    public ?string $email;
    public ?string $fax;
    public ?string $phone;
    public ?string $address;
    public ?string $taxIdNumber;

    public function __construct(Supplier $supplier)
    {
        $this->id = $supplier->getId();
        $this->name = $supplier->getName();
        $this->fax = $supplier->getFax();
        $this->email = $supplier->getEmail();
        $this->phone = $supplier->getPhone();
        $this->address = '';
        $this->taxIdNumber = '';
    }
}
