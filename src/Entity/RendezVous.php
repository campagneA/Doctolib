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
     * @ORM\Column(type="integer")
     */
    private $patient_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $doctor_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $cabinet_id;

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

    public function getPatientId(): ?int
    {
        return $this->patient_id;
    }

    public function setPatientId(int $patient_id): self
    {
        $this->patient_id = $patient_id;

        return $this;
    }

    public function getDoctorId(): ?int
    {
        return $this->docteur_id;
    }

    public function setDoctorId(int $docteur_id): self
    {
        $this->docteur_id = $docteur_id;

        return $this;
    }

    public function getCabinetId(): ?int
    {
        return $this->cabinet_id;
    }

    public function setCabinetId(int $cabinet_id): self
    {
        $this->cabinet_id = $cabinet_id;

        return $this;
    }
}
