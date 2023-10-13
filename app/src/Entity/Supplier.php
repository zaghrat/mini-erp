<?php

namespace App\Entity;

use App\Repository\SupplierRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SupplierRepository::class)]
class Supplier
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $email = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $phone = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $fax = null;

    #[ORM\ManyToOne(inversedBy: 'suppliers')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Company $company = null;

    #[ORM\OneToMany(mappedBy: 'supplier', targetEntity: SupplierOrder::class, orphanRemoval: true)]
    private Collection $supplierOrders;

    public function __construct()
    {
        $this->supplierOrders = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): static
    {
        $this->email = $email;

        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(?string $phone): static
    {
        $this->phone = $phone;

        return $this;
    }

    public function getFax(): ?string
    {
        return $this->fax;
    }

    public function setFax(?string $fax): static
    {
        $this->fax = $fax;

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

    /**
     * @return Collection<int, SupplierOrder>
     */
    public function getSupplierOrders(): Collection
    {
        return $this->supplierOrders;
    }

    public function addSupplierOrder(SupplierOrder $supplierOrder): static
    {
        if (!$this->supplierOrders->contains($supplierOrder)) {
            $this->supplierOrders->add($supplierOrder);
            $supplierOrder->setSupplier($this);
        }

        return $this;
    }

    public function removeSupplierOrder(SupplierOrder $supplierOrder): static
    {
        if ($this->supplierOrders->removeElement($supplierOrder)) {
            // set the owning side to null (unless already changed)
            if ($supplierOrder->getSupplier() === $this) {
                $supplierOrder->setSupplier(null);
            }
        }

        return $this;
    }
}
