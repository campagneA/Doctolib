<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\PatientRepository;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=PatientRepository::class)
 */
class Patient
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     * @Assert\Length(
     *      min = 3,
     *      max = 50,
     *      minMessage = "Your name must be at least {{ limit }} characters long",
     *      maxMessage = "Your name cannot be longer than {{ limit }} characters",
     *      allowEmptyString = false
     *      * )
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=50)
     * @Assert\Length(
     *      min = 3,
     *      max = 50,
     *      minMessage = "Your name must be at least {{ limit }} characters long",
     *      maxMessage = "Your name cannot be longer than {{ limit }} characters",
     *      allowEmptyString = false
     *      * )
     */
    private $prenom;

    /**
     * @ORM\Column(type="date")
     * 
     * @Assert\Regex(
     *      pattern = "\([12]\d{3}-(0[1-9]|1[0-2])-(0[1-9]|[12]\d|3[01]))\",
     *      match = true,
     *      message = "Le format de votre date de naissance n'est pas conforme !"
     * )
     */
    private $dateNaissance;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $rue;

    /**
     * @ORM\Column(type="integer")
     */
    private $numeroRue;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $ville;

    /**
     * @ORM\Column(type="integer")
     */
    private $codePostal;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $mail;

    /**
     * @ORM\Column(type="integer")
     */
    private $telephone;

    // /**
    //  * @ORM\OneToMany(targetEntity=RendezVous::class, mappedBy="Patient")
    //  */
    // private $rendezVousId;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $password;

    public function __construct()
    {
        $this->rendezVousId = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getDateNaissance(): ?\DateTimeInterface
    {
        return $this->dateNaissance;
    }

    public function setDateNaissance(\DateTimeInterface $dateNaissance): self
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    public function getRue(): ?string
    {
        return $this->rue;
    }

    public function setRue(string $rue): self
    {
        $this->rue = $rue;

        return $this;
    }

    public function getNumeroRue(): ?int
    {
        return $this->numeroRue;
    }

    public function setNumeroRue(int $numeroRue): self
    {
        $this->numeroRue = $numeroRue;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(string $ville): self
    {
        $this->ville = $ville;

        return $this;
    }

    public function getCodePostal(): ?int
    {
        return $this->codePostal;
    }

    public function setCodePostal(int $codePostal): self
    {
        $this->codePostal = $codePostal;

        return $this;
    }

    public function getMail(): ?string
    {
        return $this->mail;
    }

    public function setMail(string $mail): self
    {
        $this->mail = $mail;

        return $this;
    }

    public function getTelephone(): ?int
    {
        return $this->telephone;
    }

    public function setTelephone(int $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }

    // /**
    //  * @return Collection|RendezVous[]
    //  */
    // public function getRendezVousId(): Collection
    // {
    //     return $this->rendezVousId;
    // }

    // public function addRendezVousId(RendezVous $rendezVousId): self
    // {
    //     if (!$this->rendezVousId->contains($rendezVousId)) {
    //         $this->rendezVousId[] = $rendezVousId;
    //         $rendezVousId->setPatient($this);
    //     }

    //     return $this;
    // }

    // public function removeRendezVousId(RendezVous $rendezVousId): self
    // {
    //     if ($this->rendezVousId->removeElement($rendezVousId)) {
    //         // set the owning side to null (unless already changed)
    //         if ($rendezVousId->getPatient() === $this) {
    //             $rendezVousId->setPatient(null);
    //         }
    //     }

    //     return $this;
    // }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }
}
