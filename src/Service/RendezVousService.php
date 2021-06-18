<?php

namespace App\Service;

use App\Repository\RendezVousRepository;
use Doctrine\ORM\EntityManagerInterface;

class RdvService
{
    public function __construct(RendezVousRepository $repository, EntityManagerInterface $entityManager)
    {
        $this->RendezVousRepository = $repository;
        $this->manager = $entityManager;
    }


    public function findBy(array $tab)
    {
        return $this->RendezVousRepository->findBy($tab);
    }

    public function findAll()
    {
        return $this->RendezVousRepository->findAll();
    }

    public function find($id)
    {
        return $this->RendezVousRepository->find($id);
    }

    public function findOneBy(array $tab)
    {
        return $this->RendezVousRepository->findOneBy($tab);
    }
}
