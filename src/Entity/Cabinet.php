<?php

namespace App\Entity;

use App\Repository\CabinetRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=CabinetRepository::class)
 */
class Cabinet
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
    private $street;

    /**
     * @ORM\Column(type="integer")
     */
    private $number;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $city;

    /**
     * @ORM\Column(type="integer", length=5)
     *
     * @Assert\Regex(
     *      pattern="/[0-9]{5}/",
     *      match = true,
     *      message = "CP non valide !"
     * )
     */
    private $postal;

    /**
     * @ORM\OneToMany(targetEntity=RendezVous::class, mappedBy="Cabinet_Id")
     */
    private $rendezVousId;

    public function __construct()
    {
        $this->rendezVousId = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getStreet(): ?string
    {
        return $this->street;
    }

    public function setStreet(string $street): self
    {
        $this->street = $street;

        return $this;
    }

    public function getNumber(): ?int
    {
        return $this->number;
    }

    public function setNumber(int $number): self
    {
        $this->number = $number;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(string $city): self
    {
        $this->city = $city;

        return $this;
    }

    public function getPostal(): ?int
    {
        return $this->postal;
    }

    public function setPostal(int $postal): self
    {
        $this->postal = $postal;

        return $this;
    }

    /**
     * @return Collection|RendezVous[]
     */
    public function getRendezVousId(): Collection
    {
        return $this->rendezVousId;
    }

    public function addRendezVousId(RendezVous $rendezVousId): self
    {
        if (!$this->rendezVousId->contains($rendezVousId)) {
            $this->rendezVousId[] = $rendezVousId;
            $rendezVousId->setCabinetId($this);
        }

        return $this;
    }

    public function removeRendezVousId(RendezVous $rendezVousId): self
    {
        if ($this->rendezVousId->removeElement($rendezVousId)) {
            // set the owning side to null (unless already changed)
            if ($rendezVousId->getCabinetId() === $this) {
                $rendezVousId->setCabinetId(null);
            }
        }

        return $this;
    }
}
