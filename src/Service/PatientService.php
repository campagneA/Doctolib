<?php

namespace App\Service;

use App\Mapper\PatientMapper;
use App\Repository\PatientRepository;
use Doctrine\ORM\EntityManagerInterface;

class PatientService
{
    private $PatientRepository;
    private $manager;

    public function __construct(PatientRepository $repository, EntityManagerInterface $entityManager)
    {
        $this->PatientRepository = $repository;
        $this->manager = $entityManager;
    }


    public function findBy(array $tab)
    {
        return $this->PatientRepository->findBy($tab);
    }

    public function findAll()
    {
        $patients = $this->patientRepository->findAll();
        $patientDTOs = [];
        foreach ($patients as $patient) {
            $mapper = new PatientMapper();
            $patientDTO = $mapper->convertPatientEntityToPatientDTO($patient);
            $patientDTOs[] = $patientDTO;
        }
        return $patientDTOs;
    }

    public function find($id)
    {
        return $this->PatientRepository->find($id);
    }

    public function findOneBy(array $tab)
    {
        return $this->PatientRepository->findOneBy($tab);
    }
}
