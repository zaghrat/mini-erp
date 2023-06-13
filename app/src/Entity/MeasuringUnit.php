<?php

namespace App\Entity;

use App\Repository\MeasuringUnitRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MeasuringUnitRepository::class)]
class MeasuringUnit
{

    #[ORM\Id]
    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Id]
    #[ORM\ManyToOne(inversedBy: 'measuringUnits')]
    #[ORM\JoinColumn(nullable: false)]
    private Company $company;

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getCompany(): Company
    {
        return $this->company;
    }

    public function setCompany(Company $company): self
    {
        $this->company = $company;

        return $this;
    }
}
