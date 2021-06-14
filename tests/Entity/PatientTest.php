<?php

namespace App\Tests\Entity;

use PHPUnit\Framework\TestCase;
use App\Entity\Patient;

class PatientTest extends TestCase
{

    public function testSetNom()
    {
        $patient = new Patient();
        $patient->setNom("DUPOND");
        $nom = $patient->getNom();

        $this->assertEquals("DUPOND", $nom, "setNom returns a bad value.");
    }

    public function testGetNom()
    {
        $patient = new Patient();
        $patient->setNom("DUPOND");
        $nom = $patient->getNom();

        $this->assertEquals("DUPOND", $nom, "getNom returns a bad value.");
    }
}
