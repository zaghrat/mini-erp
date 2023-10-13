<?php

namespace App\Entity;

use App\Repository\SupplierOrderRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SupplierOrderRepository::class)]
class SupplierOrder
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $internalReference = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $createdAt = null;

    #[ORM\ManyToOne(inversedBy: 'supplierOrders')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Supplier $supplier = null;

    #[ORM\Column]
    private ?float $preTaxAmount = null;

    #[ORM\Column]
    private ?float $vatAmount = null;

    #[ORM\Column]
    private ?float $totalAmount = null;

    #[ORM\Column(length: 255)]
    private ?string $status = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $externalReference = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $deliveryDate = null;

    #[ORM\ManyToOne(inversedBy: 'supplierOrders')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Company $company = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getInternalReference(): ?string
    {
        return $this->internalReference;
    }

    public function setInternalReference(?string $internalReference): static
    {
        $this->internalReference = $internalReference;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeImmutable $createdAt): static
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getSupplier(): ?Supplier
    {
        return $this->supplier;
    }

    public function setSupplier(?Supplier $supplier): static
    {
        $this->supplier = $supplier;

        return $this;
    }

    public function getPreTaxAmount(): ?float
    {
        return $this->preTaxAmount;
    }

    public function setPreTaxAmount(float $preTaxAmount): static
    {
        $this->preTaxAmount = $preTaxAmount;

        return $this;
    }

    public function getVatAmount(): ?float
    {
        return $this->vatAmount;
    }

    public function setVatAmount(float $vatAmount): static
    {
        $this->vatAmount = $vatAmount;

        return $this;
    }

    public function getTotalAmount(): ?float
    {
        return $this->totalAmount;
    }

    public function setTotalAmount(float $totalAmount): static
    {
        $this->totalAmount = $totalAmount;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): static
    {
        $this->status = $status;

        return $this;
    }

    public function getExternalReference(): ?string
    {
        return $this->externalReference;
    }

    public function setExternalReference(?string $externalReference): static
    {
        $this->externalReference = $externalReference;

        return $this;
    }

    public function getDeliveryDate(): ?\DateTimeInterface
    {
        return $this->deliveryDate;
    }

    public function setDeliveryDate(?\DateTimeInterface $deliveryDate): static
    {
        $this->deliveryDate = $deliveryDate;

        return $this;
    }

    public function getCompany(): ?Company
    {
        return $this->company;
    }

    public function setCompany(?Company $company): static
    {
        $this->company = $company;

        return $this;
    }
}
