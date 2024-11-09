<?php

namespace App\Entity;

use App\Repository\DahirasRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DahirasRepository::class)]
class Dahiras
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    private ?string $adresse = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $description = null;

    /**
     * @var Collection<int, Encadreur>
     */
    #[ORM\OneToMany(targetEntity: Encadreur::class, mappedBy: 'dahiras')]
    private Collection $encadreurs;

    /**
     * @var Collection<int, Membres>
     */
    #[ORM\OneToMany(targetEntity: Membres::class, mappedBy: 'dahiras')]
    private Collection $membres;

    public function __construct()
    {
        $this->encadreurs = new ArrayCollection();
        $this->membres = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): static
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return Collection<int, Encadreur>
     */
    public function getEncadreurs(): Collection
    {
        return $this->encadreurs;
    }

    public function addEncadreur(Encadreur $encadreur): static
    {
        if (!$this->encadreurs->contains($encadreur)) {
            $this->encadreurs->add($encadreur);
            $encadreur->setDahiras($this);
        }

        return $this;
    }

    public function removeEncadreur(Encadreur $encadreur): static
    {
        if ($this->encadreurs->removeElement($encadreur)) {
            // set the owning side to null (unless already changed)
            if ($encadreur->getDahiras() === $this) {
                $encadreur->setDahiras(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Membres>
     */
    public function getMembres(): Collection
    {
        return $this->membres;
    }

    public function addMembre(Membres $membre): static
    {
        if (!$this->membres->contains($membre)) {
            $this->membres->add($membre);
            $membre->setDahiras($this);
        }

        return $this;
    }

    public function removeMembre(Membres $membre): static
    {
        if ($this->membres->removeElement($membre)) {
            // set the owning side to null (unless already changed)
            if ($membre->getDahiras() === $this) {
                $membre->setDahiras(null);
            }
        }

        return $this;
    }

}
