<?php

namespace App\DTO;

use App\Entity\Article;
use App\Entity\VAT;

class ArticleDTO
{
    public ?string $name;
    public ?int $id;
    public ?float $preTaxPrice;
    public ?string $description;
    public ?float $vat;

    public function __construct(Article $article)
    {
        $this->id = $article->getId();
        $this->name = $article->getName();
        $this->preTaxPrice = $article->getPreTaxPrice();
        $this->description = $article->getDescription();
        $this->vat = $article->getVat()->getValue();
    }
}
