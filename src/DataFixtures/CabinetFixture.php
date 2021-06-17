<?php

namespace App\DataFixtures;



use App\Entity\Cabinet;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class CabinetFixture extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);
        for ($i = 0; $i < 5; $i++) {
            $cabinet = new Cabinet();
            $cabinet->setStreet('Rue ' . $i);
            $cabinet->setNumber($i);
            $cabinet->setPostal(5900 . $i);
            $cabinet->setCity('Ville ' . $i);
            $cabinet->setName('St Pierre' . $i);

            $manager->persist($cabinet);
        }

        $manager->flush();
    }
}
