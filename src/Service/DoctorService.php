<?php

namespace App\Service;

use App\Repository\DoctorRepository;
use Doctrine\ORM\EntityManagerInterface;

class DocteurService
{
    private $DoctorRepository;
    private $manager;

    public function __construct(DoctorRepository $repository, EntityManagerInterface $entityManager)
    {
        $this->DocteurRepository = $repository;
        $this->manager = $entityManager;
    }


    public function findBy(array $tab)
    {
        return $this->DoctorRepository->findBy($tab);
    }

    public function findAll()
    {
        return $this->DoctorRepository->findAll();
    }

    public function find($id)
    {
        return $this->DoctorRepository->find($id);
    }

    public function findOneBy(array $tab)
    {
        return $this->DoctorRepository->findOneBy($tab);
    }
}
