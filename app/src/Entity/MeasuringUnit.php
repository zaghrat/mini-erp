<?php

namespace App\Entity;

use App\Repository\MeasuringUnitRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

#[ORM\Entity(repositoryClass: MeasuringUnitRepository::class)]
#[UniqueEntity(
    fields: ['name', 'company'],
    message: 'This name is already in use.',
    errorPath: 'name',
)]
class MeasuringUnit
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'AUTO')]
    #[ORM\Column(type: 'integer')]
    private int $id;

    #[ORM\Column(length: 255, nullable: false)]
    private string $name;

    #[ORM\ManyToOne(inversedBy: 'measuringUnits')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Company $company;


    public function getName(): string
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

    public function setCompany(?Company $company): self
    {
        $this->company = $company;

        return $this;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }
}
