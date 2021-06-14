<?php

namespace App\Tests\Entity;

use PHPUnit\Framework\TestCase;
use App\Entity\Doctor;

class DoctorTest extends TestCase
{

    /**
     * Get the value of firstName
     */
    public function testGetFirstName()
    {
        $doctor = new Doctor();
        $doctor->setFirstName("Bouchard");
        $firstName = $doctor->getFirstName();

        $this->assertEquals("Bouchard", $firstName, "setNom returns a bad value.");
    }

    /**
     * Set the value of firstName
     *
     * @return  self
     */
    public function testSetFirstName()
    {
        $doctor = new Doctor();
        $doctor->setFirstName("Bouchard");
        $firstName = $doctor->getFirstName();

        $this->assertEquals("Bouchard", $firstName, "setNom returns a bad value.");
    }

    /**
     * Get the value of lastName
     */
    public function testGetLastName()
    {
        $doctor = new Doctor();
        $doctor->setFirstName("Gerard");
        $lastName = $doctor->getFirstName();

        $this->assertEquals("Gerard", $lastName, "setNom returns a bad value.");
    }

    /**
     * Set the value of lastName
     *
     * @return  self
     */
    public function testSetLastName()
    {
        $doctor = new Doctor();
        $doctor->setLastName("Gerard");
        $lastName = $doctor->getLastName();

        $this->assertEquals("Gerard", $lastName, "setNom returns a bad value.");
    }
}
