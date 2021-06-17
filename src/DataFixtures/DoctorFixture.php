<?php

namespace App\DataFixtures;



use App\Entity\Doctor;
use App\Entity\Speciality;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class DoctorFixture extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $speciality = (new Speciality())
            ->setSpeciality("Généraliste");
        $manager->persist($speciality);

        $speciality2 = (new Speciality())
            ->setSpeciality("Gyneco");
        $manager->persist($speciality2);

        for ($i = 0; $i < 5; $i++) {
            $doctor = new Doctor();
            $doctor->setFirstName('Nom ' . $i);
            $doctor->setLastname('Prenom ' . $i);
            $doctor->addSpeciality($speciality);
            $doctor->addSpeciality($speciality2);

            $manager->persist($doctor);
        }

        $manager->flush();
    }
}
