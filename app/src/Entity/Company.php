<?php

namespace App\Entity;

use App\Repository\CompanyRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: CompanyRepository::class)]
class Company
{
    private const DEFAULT_CURRENCY = 'TND';
    private const DEFAULT_NAME = 'COMPANY NAME';
    private const FREE_USERS = 2;
    private const PAID_USERS = 50;
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: false)]
    #[Assert\NotBlank]
    private string $name;

    #[Assert\NotBlank]
    #[Assert\Currency]
    #[ORM\Column(length: 10, nullable: false)]
    private string $currency;

    #[ORM\OneToMany(mappedBy: 'company', targetEntity: User::class)]
    private Collection $users;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $phone = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $email = null;

    #[ORM\Column]
    private ?bool $isFreeAccount = true;

    #[ORM\OneToMany(mappedBy: 'company', targetEntity: MeasuringUnit::class, orphanRemoval: true)]
    private Collection $measuringUnits;

    #[ORM\OneToMany(mappedBy: 'company', targetEntity: VAT::class, orphanRemoval: true)]
    private Collection $vATs;

    #[ORM\OneToMany(mappedBy: 'company', targetEntity: Tax::class, orphanRemoval: true)]
    private Collection $taxes;

    #[ORM\OneToMany(mappedBy: 'company', targetEntity: Client::class, orphanRemoval: true)]
    private Collection $clients;

    #[ORM\OneToMany(mappedBy: 'company', targetEntity: Supplier::class, orphanRemoval: true)]
    private Collection $suppliers;

    #[ORM\OneToMany(mappedBy: 'company', targetEntity: ArticleCategory::class, orphanRemoval: true)]
    private Collection $articleCategories;

    public function getMaxAllowedUserAccounts(): int
    {
        return $this->isFreeAccount() ? self::FREE_USERS : self::PAID_USERS;
    }

    public function __construct()
    {
        $this->users = new ArrayCollection();
        $this->measuringUnits = new ArrayCollection();
        $this->currency = self::DEFAULT_CURRENCY;
        $this->name = self::DEFAULT_NAME;
        $this->vATs = new ArrayCollection();
        $this->taxes = new ArrayCollection();
        $this->clients = new ArrayCollection();
        $this->suppliers = new ArrayCollection();
        $this->articleCategories = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getCurrency(): string
    {
        return $this->currency;
    }

    public function setCurrency(string $currency): self
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * @return Collection<int, User>
     */
    public function getUsers(): Collection
    {
        return $this->users;
    }

    public function addUser(User $user): self
    {
        if (!$this->users->contains($user)) {
            $this->users->add($user);
            $user->setCompany($this);
        }

        return $this;
    }

    public function removeUser(User $user): self
    {
        if ($this->users->removeElement($user)) {
            // set the owning side to null (unless already changed)
            if ($user->getCompany() === $this) {
                $user->setCompany(null);
            }
        }

        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(?string $phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function isFreeAccount(): ?bool
    {
        return $this->isFreeAccount;
    }

    public function setIsFreeAccount(bool $isFreeAccount): self
    {
        $this->isFreeAccount = $isFreeAccount;

        return $this;
    }

    /**
     * @return Collection<int, MeasuringUnit>
     */
    public function getMeasuringUnits(): Collection
    {
        return $this->measuringUnits ?? [];
    }

    public function addMeasuringUnit(MeasuringUnit $measuringUnit): self
    {
        if (!$this->measuringUnits->contains($measuringUnit)) {
            $this->measuringUnits->add($measuringUnit);
            $measuringUnit->setCompany($this);
        }

        return $this;
    }

    public function removeMeasuringUnit(MeasuringUnit $measuringUnit): self
    {
        if ($this->measuringUnits->removeElement($measuringUnit)) {
            // set the owning side to null (unless already changed)
            if ($measuringUnit->getCompany() === $this) {
                $measuringUnit->setCompany(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, VAT>
     */
    public function getVATs(): Collection
    {
        return $this->vATs;
    }

    public function addVAT(VAT $vAT): self
    {
        if (!$this->vATs->contains($vAT)) {
            $this->vATs->add($vAT);
            $vAT->addCompany($this);
        }

        return $this;
    }

    public function removeVAT(VAT $vAT): self
    {
        if ($this->vATs->removeElement($vAT)) {
            // set the owning side to null (unless already changed)
            if ($vAT->getCompany() === $this) {
                $vAT->setCompany(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Tax>
     */
    public function getTaxes(): Collection
    {
        return $this->taxes;
    }

    public function addTax(Tax $tax): self
    {
        if (!$this->taxes->contains($tax)) {
            $this->taxes->add($tax);
            $tax->setCompany($this);
        }

        return $this;
    }

    public function removeTax(Tax $tax): self
    {
        if ($this->taxes->removeElement($tax)) {
            // set the owning side to null (unless already changed)
            if ($tax->getCompany() === $this) {
                $tax->setCompany(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Client>
     */
    public function getClients(): Collection
    {
        return $this->clients;
    }

    public function addClient(Client $client): static
    {
        if (!$this->clients->contains($client)) {
            $this->clients->add($client);
            $client->setCompany($this);
        }

        return $this;
    }

    public function removeClient(Client $client): static
    {
        if ($this->clients->removeElement($client)) {
            // set the owning side to null (unless already changed)
            if ($client->getCompany() === $this) {
                $client->setCompany(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection
     */
    public function getSuppliers(): Collection
    {
        return $this->suppliers;
    }

    public function addSupplier(Supplier $supplier): static
    {
        if (!$this->suppliers->contains($supplier)) {
            $this->suppliers->add($supplier);
            $supplier->setCompany($this);
        }

        return $this;
    }

    public function removeSupplier(Supplier $supplier): static
    {
        if ($this->suppliers->removeElement($supplier)) {
            // set the owning side to null (unless already changed)
            if ($supplier->getCompany() === $this) {
                $supplier->setCompany(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, ArticleCategory>
     */
    public function getArticleCategories(): Collection
    {
        return $this->articleCategories;
    }

    public function addArticleCategory(ArticleCategory $articleCategory): static
    {
        if (!$this->articleCategories->contains($articleCategory)) {
            $this->articleCategories->add($articleCategory);
            $articleCategory->setCompany($this);
        }

        return $this;
    }

    public function removeArticleCategory(ArticleCategory $articleCategory): static
    {
        if ($this->articleCategories->removeElement($articleCategory)) {
            // set the owning side to null (unless already changed)
            if ($articleCategory->getCompany() === $this) {
                $articleCategory->setCompany(null);
            }
        }

        return $this;
    }
}
