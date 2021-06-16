<?php

namespace App\Entity;

use App\Repository\DoctorRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DoctorRepository::class)
 */
class Doctor
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $firstName;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lastName;

    /**
     * @ORM\OneToMany(targetEntity=RendezVous::class, mappedBy="Doctor_Id")
     */
    private $RendezVousId;

    public function __construct()
    {
        $this->RendezVousId = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * @return Collection|RendezVous[]
     */
    public function getRendezVousId(): Collection
    {
        return $this->RendezVousId;
    }

    public function addRendezVousId(RendezVous $rendezVousId): self
    {
        if (!$this->RendezVousId->contains($rendezVousId)) {
            $this->RendezVousId[] = $rendezVousId;
            $rendezVousId->setDoctorId($this);
        }

        return $this;
    }

    public function removeRendezVousId(RendezVous $rendezVousId): self
    {
        if ($this->RendezVousId->removeElement($rendezVousId)) {
            // set the owning side to null (unless already changed)
            if ($rendezVousId->getDoctorId() === $this) {
                $rendezVousId->setDoctorId(null);
            }
        }

        return $this;
    }
}
