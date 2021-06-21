<?php

namespace App\Mapper;

use App\DTO\PatientDTO;
use App\Entity\Patient;

class PatientMapper
{
    public function convertPatientEntityToPatientDTO(Patient $patient): PatientDTO
    {
        $pDTO = (new PatientDTO())->setId($patient->getId())
            ->setNom($patient->getNom())
            ->setPrenom($patient->getPrenom())
            ->setDateNaissance($patient->getDateNaissance())
            ->setRue($patient->getRue())
            ->setNumeroRue($patient->getNumeroRue())
            ->setVille($patient->getVille())
            ->setCodePostal($patient->getCodePostal())
            ->setMail($patient->getMail())
            ->setTelephone($patient->getTelephone());
        return $pDTO;
    }
}
