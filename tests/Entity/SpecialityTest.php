<?php

namespace App\Tests\Entity;

use PHPUnit\Framework\TestCase;
use App\Entity\Speciality;

class SpecialityTest extends TestCase
{

    public $speciality;


    /**
     * Get the value of speciality
     */
    public function testGetSpeciality()
    {
        $speciality = new Speciality();
        $speciality->setSpeciality("Gynecologue");
        $speName = $speciality->getSpeciality();

        $this->assertEquals("Gynecologue", $speName, "setNom returns a bad value.");

        $speciality = new Speciality();
        $speciality->setSpeciality("Opticien");
        $speName = $speciality->getSpeciality();

        $this->assertEquals("Opticien", $speName, "setNom returns a bad value.");

        $speciality = new Speciality();
        $speciality->setSpeciality("Generaliste");
        $speName = $speciality->getSpeciality();

        $this->assertEquals("Generaliste", $speName, "setNom returns a bad value.");
    }

    /**
     * Set the value of speciality
     *
     * @return  self
     */
    public function testSetSpeciality()
    {
        $speciality = new Speciality();
        $speciality->setSpeciality("Gynecologue");
        $speName = $speciality->getSpeciality();

        $this->assertEquals("Gynecologue", $speName, "setNom returns a bad value.");

        $speciality = new Speciality();
        $speciality->setSpeciality("Opticien");
        $speName = $speciality->getSpeciality();

        $this->assertEquals("Opticien", $speName, "setNom returns a bad value.");

        $speciality = new Speciality();
        $speciality->setSpeciality("Generaliste");
        $speName = $speciality->getSpeciality();

        $this->assertEquals("Generaliste", $speName, "setNom returns a bad value.");
    }
}
