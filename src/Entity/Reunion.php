<?php

namespace App\Entity;

use App\Repository\ReunionRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ReunionRepository::class)]
class Reunion
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $date = null;

    #[ORM\Column(length: 255)]
    private ?string $lieu = null;

    #[ORM\ManyToOne(inversedBy: 'reunions')]
    private ?Encadreur $encadreur = null;

    #[ORM\ManyToOne(inversedBy: 'reunions')]
    private ?Themes $theme = null;

    #[ORM\ManyToOne(inversedBy: 'reunions')]
    private ?Dahiras $dahiras = null;

    /**
     * @var Collection<int, DetailReunion>
     */
    #[ORM\OneToMany(targetEntity: DetailReunion::class, mappedBy: 'reunion')]
    private Collection $detailReunions;

    public function __construct()
    {
        $this->detailReunions = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): static
    {
        $this->date = $date;

        return $this;
    }

    public function getLieu(): ?string
    {
        return $this->lieu;
    }

    public function setLieu(string $lieu): static
    {
        $this->lieu = $lieu;

        return $this;
    }

    public function getEncadreur(): ?Encadreur
    {
        return $this->encadreur;
    }

    public function setEncadreur(?Encadreur $encadreur): static
    {
        $this->encadreur = $encadreur;

        return $this;
    }

    public function getTheme(): ?Themes
    {
        return $this->theme;
    }

    public function setTheme(?Themes $theme): static
    {
        $this->theme = $theme;

        return $this;
    }

    public function getDahiras(): ?Dahiras
    {
        return $this->dahiras;
    }

    public function setDahiras(?Dahiras $dahiras): static
    {
        $this->dahiras = $dahiras;

        return $this;
    }

    /**
     * @return Collection<int, DetailReunion>
     */
    public function getDetailReunions(): Collection
    {
        return $this->detailReunions;
    }

    public function addDetailReunion(DetailReunion $detailReunion): static
    {
        if (!$this->detailReunions->contains($detailReunion)) {
            $this->detailReunions->add($detailReunion);
            $detailReunion->setReunion($this);
        }

        return $this;
    }

    public function removeDetailReunion(DetailReunion $detailReunion): static
    {
        if ($this->detailReunions->removeElement($detailReunion)) {
            // set the owning side to null (unless already changed)
            if ($detailReunion->getReunion() === $this) {
                $detailReunion->setReunion(null);
            }
        }

        return $this;
    }
}
