<?php

namespace App\Tests\Repository;

use App\DataFixtures\PatientFixture;
use App\Repository\PatientRepository;
use Liip\TestFixturesBundle\Test\FixturesTrait;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class PatientRepositoryTest extends KernelTestCase
{
    use FixturesTrait;

    public function testFindAll()
    {
        self::bootKernel();
        $repository = self::$container->get(PatientRepository::class);
        $this->loadFixtures([PatientFixture::class]);
        $patients = $repository->findAll();

        $this->assertCount(5, $patients);
    }

    public function testFind()
    {
        self::bootKernel();
        $repository = self::$container->get(PatientRepository::class);
        $this->loadFixtures([PatientFixture::class]);
        $patients = $repository->findAll();
        $result = $repository->find($patients[0]->getId());


        $this->assertEquals($patients[0]->getId(), $result->getId());
    }

    public function testFindOneBy()
    {
        // $patient = (new Patient())
        //     ->setNom("Pavard")
        //     ->setPrenom("Benjamin")
        //     ->setDateNaissance(date_create('1999-10-10'))
        //     ->setRue("Rue")
        //     ->setNumeroRue(666)
        //     ->setVille("Lille")
        //     ->setCodePostal(59000)
        //     ->setMail("kiki@kuku.fr")
        //     ->setTelephone(0606060606);

        self::bootKernel();
        $repository = self::$container->get(PatientRepository::class);
        $this->loadFixtures([PatientFixture::class]);
        $patient = $repository->findOneBy(['nom' => 'Nom 2', 'ville' => "Ville 2"]);

        $this->assertEquals('Nom 2', $patient->getNom());
        $this->assertEquals("Ville 2", $patient->getVille());
    }
}
