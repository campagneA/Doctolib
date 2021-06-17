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
        $patient = (new Patient())
            ->setNom("Pavard")
            ->setPrenom("Benjamin")
            ->setDateNaissance(date_create('1999-10-10'))
            ->setRue("Rue")
            ->setNumeroRue(666)
            ->setVille("Lille")
            ->setCodePostal(59000)
            ->setMail("kiki@kuku.fr")
            ->setTelephone(0606060606);

        $manager->persist($patient);

        $doctor = (new Doctor())
            ->setFirstName("Namour")
            ->setLastName("Maboule");

        $manager->persist($doctor);

        $cabinet = (new Cabinet())
            ->setStreet("Boulevard")
            ->setNumber(999)
            ->setCity("Roubaix")
            ->setPostal(59999)
            ->setName('St Thomas');

        $manager->persist($cabinet);

        $rdv = new RendezVous();
        $rdv->setDate(date_create('1999-10-11'));
        $rdv->setPatientId($patient);
        $rdv->setDoctorId($doctor);
        $rdv->setCabinetId($cabinet);

        $manager->persist($rdv);

        $manager->flush();
    }
}
