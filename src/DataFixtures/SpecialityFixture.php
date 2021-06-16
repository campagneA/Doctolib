<?php

namespace App\DataFixtures;

use App\Entity\Speciality;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class SpecialityFixture extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);
        for ($i = 0; $i < 3; $i++) {
            $spe = new Speciality();
            $spe->setSpeciality('Spécialité ' . $i);

            $manager->persist($spe);
        }

        $manager->flush();
    }
}
