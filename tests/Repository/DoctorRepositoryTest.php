<?php

namespace App\Tests\Repository;

use App\DataFixtures\DoctorFixture;
use App\Repository\DoctorRepository;
use Liip\TestFixturesBundle\Test\FixturesTrait;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class DoctorRepositoryTest extends KernelTestCase
{
    use FixturesTrait;

    public function testFindAll()
    {
        self::bootKernel();
        $repository = self::$container->get(DoctorRepository::class);
        $this->loadFixtures([DoctorFixture::class]);
        $Doctors = $repository->findAll();

        $this->assertCount(5, $Doctors);
    }

    public function testFind()
    {
        self::bootKernel();
        $repository = self::$container->get(DoctorRepository::class);
        $this->loadFixtures([DoctorFixture::class]);
        $Doctors = $repository->findAll();
        $result = $repository->find($Doctors[0]->getId());


        $this->assertEquals($Doctors[0]->getId(), $result->getId());
    }

    public function testFindOneBy()
    {
        // $Doctor = (new Doctor())
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
        $repository = self::$container->get(DoctorRepository::class);
        $this->loadFixtures([DoctorFixture::class]);
        $Doctor = $repository->findOneBy(['firstName' => 'Nom 2', 'lastName' => "Prenom 2"]);

        $this->assertEquals('Nom 2', $Doctor->getFirstName());
        $this->assertEquals("Prenom 2", $Doctor->getLastName());
    }
}
