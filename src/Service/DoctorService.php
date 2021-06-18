<?php

namespace App\Service;

use App\Repository\DoctorRepository;
use Doctrine\ORM\EntityManagerInterface;

class DocteurService
{
    private $DocteurRepository;
    private $manager;

    public function __construct(DoctorRepository $repository, EntityManagerInterface $entityManager)
    {
        $this->DocteurRepository = $repository;
        $this->manager = $entityManager;
    }


    public function FindBy(array $tab)
    {
        return $this->DocteurRepository->testFindOneBy($tab);
    }
    public function FindAll()
    {
        return $this->DocteurRepository->testFindOneBy();
    }
}
