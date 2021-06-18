<?php

namespace App\Service;

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
        return $this->PatientRepository->findAll();
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
