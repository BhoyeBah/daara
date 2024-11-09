<?php

namespace App\Entity;

use App\Repository\DetailReunionRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DetailReunionRepository::class)]
class DetailReunion
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'detailReunions')]
    private ?Reunion $reunion = null;

    #[ORM\ManyToOne(inversedBy: 'detailReunions')]
    private ?Membres $membre = null;

    #[ORM\Column]
    private ?bool $present = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getReunion(): ?Reunion
    {
        return $this->reunion;
    }

    public function setReunion(?Reunion $reunion): static
    {
        $this->reunion = $reunion;

        return $this;
    }

    public function getMembre(): ?Membres
    {
        return $this->membre;
    }

    public function setMembre(?Membres $membre): static
    {
        $this->membre = $membre;

        return $this;
    }

    public function isPresent(): ?bool
    {
        return $this->present;
    }

    public function setPresent(bool $present): static
    {
        $this->present = $present;

        return $this;
    }
}
