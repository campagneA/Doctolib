<?php

namespace App\DataFixtures;


use App\Entity\Patient;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class PatientFixture extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);
        for ($i = 0; $i < 5; $i++) {
            $patient = new Patient();
            $patient->setNom('Nom ' . $i);
            $patient->setPrenom('Prenom ' . $i);
            $patient->setCodePostal(5900 . $i);
            $patient->setMail('kiki' . $i . '@kuku.com');
            $patient->setDateNaissance(date_create('1999-10-1' . $i));
            $patient->setRue('Rue ' . $i);
            $patient->setNumeroRue($i);
            $patient->setVille('Ville ' . $i);
            $patient->setTelephone(060606060 . $i);
            $patient->setPassWord("toto" . $i);

            $manager->persist($patient);
        }

        $manager->flush();
    }
}
