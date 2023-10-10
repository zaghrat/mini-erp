<?php

namespace App\Entity;

use App\Repository\ArticleRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ArticleRepository::class)]
class Article
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $description = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $barcode = null;

    #[ORM\Column(type: Types::GUID)]
    private string $guid;

    #[ORM\Column(nullable: false)]
    private float $price = 0.000;

    #[ORM\Column(nullable: false)]
    private int $quantity = 0;

    #[ORM\ManyToOne(inversedBy: 'articles')]
    private ArticleCategory $category;

    #[ORM\ManyToOne(inversedBy: 'articles')]
    private ?Company $company;

    #[ORM\Column]
    private int $minimumQuantityLimit = 0;


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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getBarcode(): ?string
    {
        return $this->barcode;
    }

    public function setBarcode(?string $barcode): static
    {
        $this->barcode = $barcode;

        return $this;
    }

    public function getGuid(): string
    {
        return $this->guid;
    }

    public function setGuid(string $guid): static
    {
        $this->guid = $guid;

        return $this;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(float $price): static
    {
        $this->price = $price;

        return $this;
    }

    public function getQuantity(): int
    {
        return $this->quantity;
    }

    public function setQuantity(int $quantity): static
    {
        $this->quantity = $quantity;

        return $this;
    }

    public function getCategory(): ArticleCategory
    {
        return $this->category;
    }

    public function setCategory(ArticleCategory $category): static
    {
        $this->category = $category;

        return $this;
    }

    public function getCompany(): Company
    {
        return $this->company;
    }

    public function setCompany(?Company $company): static
    {
        $this->company = $company;

        return $this;
    }

    public function getMinimumQuantityLimit(): int
    {
        return $this->minimumQuantityLimit;
    }

    public function setMinimumQuantityLimit(int $minimumQuantityLimit): static
    {
        $this->minimumQuantityLimit = $minimumQuantityLimit;

        return $this;
    }
}
