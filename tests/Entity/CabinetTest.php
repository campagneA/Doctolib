<?php

namespace App\Tests\Entity;

use PHPUnit\Framework\TestCase;
use App\Entity\Cabinet;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class CabinetTest extends KernelTestCase
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
    public function testGetCity()
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
        $postal->setPostal(75000);
        $postalCity = $postal->getPostal();

        $this->assertEquals(75000, $postalCity, "setNom returns a bad value.");
    }

    /**
     * Set the value of postal
     *
     * @return  self
     */
    public function testSetPostal()
    {
        $postal = new Cabinet();
        $postal->setPostal(75000);
        $postalCity = $postal->getPostal();

        $this->assertEquals(75000, $postalCity, "setNom returns a bad value.");
    }

    public function testPostalIsInValid()
    {
        $kernel = self::bootKernel();
        $validator = $kernel->getContainer()->get('validator');
        $postal = new Cabinet();
        $postal->setPostal(750);
        $errors = $validator->validate($postal);

        // $this->assertCount(1, $errors, "Une erreur est attendue car moins de 5 chars");
        $this->assertEquals(1, count($errors), "Une erreur est attendue car moins de 5 chars");
        $this->assertEquals("CP non valide !", $errors[0]->getMessage());
    }

    public function testPostalIsValid()
    {
        $kernel = self::bootKernel();
        $validator = $kernel->getContainer()->get('validator');
        $postal = new Cabinet();
        $postal->setPostal(75000);
        $errors = $validator->validate($postal);

        // $this->assertCount(0, $errors, "Une erreur est attendue car plus de 5 chars");
        $this->assertEquals(0, count($errors), "Une erreur est attendue car plus de 5 chars");
        // $this->assertEquals("Your name must be at least 3 characters long", $errors[0]->getMessage());
    }
}
