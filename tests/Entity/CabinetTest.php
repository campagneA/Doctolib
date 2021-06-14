<?php

namespace App\Tests\Entity;

use PHPUnit\Framework\TestCase;
use App\Entity\Cabinet;

class CabinetTest extends TestCase
{

    public $street;
    public $number;
    public $city;
    public $postal;


    /**
     * Get the value of street
     */
    public function testGetStreet()
    {
        $street = new Cabinet();
        $street->setStreet("Rue des Lilas");
        $streetName = $street->getStreet();

        $this->assertEquals("Rue des Lilas", $streetName, "setNom returns a bad value.");
    }

    /**
     * Set the value of street
     *
     * @return  self
     */
    public function testSetStreet()
    {
        $street = new Cabinet();
        $street->setStreet("Rue des Lilas");
        $streetName = $street->getStreet();

        $this->assertEquals("Rue des Lilas", $streetName, "setNom returns a bad value.");
    }

    /**
     * Get the value of number
     */
    public function testGetNumber()
    {
        $number = new Cabinet();
        $number->setNumber("115");
        $numberStreet = $number->getNumber();

        $this->assertEquals("115", $numberStreet, "setNom returns a bad value.");
    }

    /**
     * Set the value of number
     *
     * @return  self
     */
    public function testSetNumber()
    {
        $number = new Cabinet();
        $number->setNumber("115");
        $numberStreet = $number->getNumber();

        $this->assertEquals("115", $numberStreet, "setNom returns a bad value.");
    }

    /**
     * Get the value of city
     */
    public function testetCity()
    {
        $city = new Cabinet();
        $city->setCity("Paris");
        $cityspe = $city->getCity();

        $this->assertEquals("Paris", $cityspe, "setNom returns a bad value.");
    }

    /**
     * Set the value of city
     *
     * @return  self
     */
    public function testSetCity()
    {
        $city = new Cabinet();
        $city->setCity("Paris");
        $cityspe = $city->getCity();

        $this->assertEquals("Paris", $cityspe, "setNom returns a bad value.");
    }

    /**
     * Get the value of postal
     */
    public function testGetPostal()
    {
        $postal = new Cabinet();
        $postal->setPostal("75000");
        $postalCity = $postal->getPostal();

        $this->assertEquals("75000", $postalCity, "setNom returns a bad value.");
    }

    /**
     * Set the value of postal
     *
     * @return  self
     */
    public function testSetPostal()
    {
        $postal = new Cabinet();
        $postal->setPostal("75000");
        $postalCity = $postal->getPostal();

        $this->assertEquals("75000", $postalCity, "setNom returns a bad value.");
    }
}
