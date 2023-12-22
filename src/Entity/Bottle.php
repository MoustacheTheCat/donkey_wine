<?php

namespace App\Entity;

use App\Repository\BottleRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BottleRepository::class)]
class Bottle
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $bottleName = null;

    #[ORM\Column(length: 255)]
    private ?string $bottleType = null;

    #[ORM\Column(length: 255)]
    private ?string $bottleYear = null;

    #[ORM\Column(length: 255)]
    private ?string $wineMaker = null;

    #[ORM\Column(length: 255)]
    private ?string $country = null;

    #[ORM\ManyToOne(inversedBy: 'bottles')]
    #[ORM\JoinColumn(nullable: false, onDelete: 'CASCADE')]
    private ?Storage $storage = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBottleName(): ?string
    {
        return $this->bottleName;
    }

    public function setBottleName(string $bottleName): static
    {
        $this->bottleName = $bottleName;

        return $this;
    }

    public function getBottleType(): ?string
    {
        return $this->bottleType;
    }

    public function setBottleType(string $bottleType): static
    {
        $this->bottleType = $bottleType;

        return $this;
    }

    public function getBottleYear(): ?string
    {
        return $this->bottleYear;
    }

    public function setBottleYear(string $bottleYear): static
    {
        $this->bottleYear = $bottleYear;

        return $this;
    }

    public function getWineMaker(): ?string
    {
        return $this->wineMaker;
    }

    public function setWineMaker(string $wineMaker): static
    {
        $this->wineMaker = $wineMaker;

        return $this;
    }

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setCountry(string $country): static
    {
        $this->country = $country;

        return $this;
    }

    public function getStorage(): ?Storage
    {
        return $this->storage;
    }

    public function setStorage(?Storage $storage): static
    {
        $this->storage = $storage;

        return $this;
    }
}
