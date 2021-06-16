<?php

namespace App\DataFixtures;



use App\Entity\Doctor;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class DoctorFixture extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);
        for ($i = 0; $i < 5; $i++) {
            $doctor = new Doctor();
            $doctor->setFirstName('Nom ' . $i);
            $doctor->setLastname('Prenom ' . $i);


            $manager->persist($doctor);
        }

        $manager->flush();
    }
}
