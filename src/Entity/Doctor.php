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
     * @ORM\OneToMany(targetEntity=RendezVous::class, mappedBy="Doctor")
     */
    private $RendezVousId;

    /**
     * @ORM\ManyToMany(targetEntity=Speciality::class, inversedBy="doctors")
     */
    private $speciality;

    public function __construct()
    {
        $this->RendezVousId = new ArrayCollection();
        $this->speciality = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(Int $id): self
    {
        $this->id = $id;

        return $this;
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

    // /**
    //  * @return Collection|RendezVous[]
    //  */
    // public function getRendezVousId(): Collection
    // {
    //     return $this->RendezVousId;
    // }

    public function addRendezVousId(RendezVous $rendezVousId): self
    {
        if (!$this->RendezVousId->contains($rendezVousId)) {
            $this->RendezVousId[] = $rendezVousId;
            $rendezVousId->setDoctor($this);
        }

        return $this;
    }

    public function removeRendezVousId(RendezVous $rendezVousId): self
    {
        if ($this->RendezVousId->removeElement($rendezVousId)) {
            // set the owning side to null (unless already changed)
            if ($rendezVousId->getDoctor() === $this) {
                $rendezVousId->setDoctor(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Speciality[]
     */
    public function getSpeciality(): Collection
    {
        return $this->speciality;
    }

    public function addSpeciality(Speciality $speciality): self
    {
        if (!$this->speciality->contains($speciality)) {
            $this->speciality[] = $speciality;
        }

        return $this;
    }

    public function removeSpeciality(Speciality $speciality): self
    {
        $this->speciality->removeElement($speciality);

        return $this;
    }
}
