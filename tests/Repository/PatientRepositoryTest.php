<?php

namespace App\Tests\Repository;

use App\DataFixtures\PatientFixtures;
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
        $this->loadFixtures([PatientFixtures::class]);
        $patients = $repository->findAll();

        $this->assertCount(0, $patients);
    }
}
