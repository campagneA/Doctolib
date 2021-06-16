<?php

namespace App\DataFixtures;


use App\Entity\Doctor;
use App\Entity\Cabinet;
use App\Entity\Patient;
use App\Entity\RendezVous;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class RendezVousFixture extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);
        // for ($i = 0; $i < 5; $i++) {
        //     $patient = new Patient();
        //     $doctor = new Doctor();
        //     $cabinet = new Cabinet();

        //     $rdv = new RendezVous();
        //     $rdv->setDate(date_create('1999-10-1' . $i));
        //     $rdv->setPatientId($i);
        //     $rdv->setDoctorId($i);
        //     $rdv->setCabinetId($cabinet->getId());

        //     $manager->persist($rdv);
        // }

        // $manager->flush();
    }
}
