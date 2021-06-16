<?php

namespace App\Entity;

use App\Repository\RendezVousRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RendezVousRepository::class)
 */
class RendezVous
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="date")
     */
    private $date;

    /**
     * @ORM\ManyToOne(targetEntity=Patient::class, inversedBy="rendezVousId")
     * @ORM\JoinColumn(nullable=false)
     */
    private $Patient_Id;

    /**
     * @ORM\ManyToOne(targetEntity=Doctor::class, inversedBy="RendezVousId")
     * @ORM\JoinColumn(nullable=false)
     */
    private $Doctor_Id;

    /**
     * @ORM\ManyToOne(targetEntity=Cabinet::class, inversedBy="rendezVousId")
     * @ORM\JoinColumn(nullable=false)
     */
    private $Cabinet_Id;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getPatientId(): ?Patient
    {
        return $this->Patient_Id;
    }

    public function setPatientId(?Patient $Patient_Id): self
    {
        $this->Patient_Id = $Patient_Id;

        return $this;
    }

    public function getDoctorId(): ?Doctor
    {
        return $this->Doctor_Id;
    }

    public function setDoctorId(?Doctor $Doctor_Id): self
    {
        $this->Doctor_Id = $Doctor_Id;

        return $this;
    }

    public function getCabinetId(): ?Cabinet
    {
        return $this->Cabinet_Id;
    }

    public function setCabinetId(?Cabinet $Cabinet_Id): self
    {
        $this->Cabinet_Id = $Cabinet_Id;

        return $this;
    }
}
