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
    private $Patient;

    /**
     * @ORM\ManyToOne(targetEntity=Doctor::class, inversedBy="RendezVousId")
     * @ORM\JoinColumn(nullable=false)
     */
    private $Doctor;

    /**
     * @ORM\ManyToOne(targetEntity=Cabinet::class, inversedBy="rendezVousId")
     * @ORM\JoinColumn(nullable=false)
     */
    private $Cabinet;

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
        return $this->Patient;
    }

    public function setPatientId(?Patient $Patient): self
    {
        $this->Patient = $Patient;

        return $this;
    }

    public function getDoctorId(): ?Doctor
    {
        return $this->Doctor;
    }

    public function setDoctorId(?Doctor $Doctor): self
    {
        $this->Doctor = $Doctor;

        return $this;
    }

    public function getCabinetId(): ?Cabinet
    {
        return $this->Cabinet;
    }

    public function setCabinetId(?Cabinet $Cabinet): self
    {
        $this->Cabinet = $Cabinet;

        return $this;
    }
}
