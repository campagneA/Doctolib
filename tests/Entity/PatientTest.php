<?php

namespace App\Tests\Entity;

use App\Entity\Patient;
use PHPUnit\Framework\TestCase;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class PatientTest extends KernelTestCase
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
    // -----------------------------------

    public function testSetPrenom()
    {
        $patient = new Patient();
        $patient->setPrenom("Pierre");
        $prenom = $patient->getPrenom();

        $this->assertEquals("Pierre", $prenom, "setPrenom returns a bad value.");
    }

    public function testGetPrenom()
    {
        $patient = new Patient();
        $patient->setPrenom("Pierre");
        $prenom = $patient->getPrenom();

        $this->assertEquals("Pierre", $prenom, "getPrenom returns a bad value.");
    }
    // -----------------------------------

    public function testSetDateNaissance()
    {
        $patient = new Patient();
        $patient->setDateNaissance(date_create('1999-10-10'));
        $datenaissance = $patient->getDateNaissance();

        $this->assertEquals(date_create('1999-10-10'), $datenaissance, "setPrenom returns a bad value.");
    }

    public function testGetDateNaissance()
    {
        $patient = new Patient();
        $patient->setDateNaissance(date_create('1999-10-10'));
        $datenaissance = $patient->getDateNaissance();

        $this->assertEquals(date_create('1999-10-10'), $datenaissance, "getPrenom returns a bad value.");
    }
    // -----------------------------------

    public function testSetRue()
    {
        $patient = new Patient();
        $patient->setRue("Rue de Paris");
        $rue = $patient->getRue();

        $this->assertEquals("Rue de Paris", $rue, "setRue returns a bad value.");
    }

    public function testGetRue()
    {
        $patient = new Patient();
        $patient->setRue("Rue de Paris");
        $rue = $patient->getRue();

        $this->assertEquals("Rue de Paris", $rue, "getRue returns a bad value.");
    }
    // -----------------------------------

    public function testSetNumeroRue()
    {
        $patient = new Patient();
        $patient->setNumeroRue(18);
        $numeroRue = $patient->getNumeroRue();

        $this->assertEquals(18, $numeroRue, "setNumeroRue returns a bad value.");
    }

    public function testGetNumeroRue()
    {
        $patient = new Patient();
        $patient->setNumeroRue(18);
        $numeroRue = $patient->getNumeroRue();

        $this->assertEquals(18, $numeroRue, "getNumeroRue returns a bad value.");
    }
    // -----------------------------------

    public function testSetVille()
    {
        $patient = new Patient();
        $patient->setVille("Paris");
        $ville = $patient->getVille();

        $this->assertEquals("Paris", $ville, "setVille returns a bad value.");
    }

    public function testGetVille()
    {
        $patient = new Patient();
        $patient->setVille("Paris");
        $ville = $patient->getVille();

        $this->assertEquals("Paris", $ville, "getVille returns a bad value.");
    }
    // -----------------------------------

    public function testSetCodePostal()
    {
        $patient = new Patient();
        $patient->setCodePostal(75000);
        $codePostal = $patient->getCodePostal();

        $this->assertEquals(75000, $codePostal, "setCodePostal returns a bad value.");
    }

    public function testGetCodePostal()
    {
        $patient = new Patient();
        $patient->setCodePostal(75000);
        $codePostal = $patient->getCodePostal();

        $this->assertEquals(75000, $codePostal, "getCodePostal returns a bad value.");
    }
    // -----------------------------------

    public function testSetMail()
    {
        $patient = new Patient();
        $patient->setMail("paris@centre.fr");
        $mail = $patient->getMail();

        $this->assertEquals("paris@centre.fr", $mail, "setMail returns a bad value.");
    }

    public function testGetMail()
    {
        $patient = new Patient();
        $patient->setMail("paris@centre.fr");
        $mail = $patient->getMail();

        $this->assertEquals("paris@centre.fr", $mail, "getMail returns a bad value.");
    }
    // -----------------------------------

    public function testSetTelephone()
    {
        $patient = new Patient();
        $patient->setTelephone(0605040302);
        $mail = $patient->getTelephone();

        $this->assertEquals(0605040302, $mail, "setTelephone returns a bad value.");
    }

    public function testGetTelephone()
    {
        $patient = new Patient();
        $patient->setTelephone(0605040302);
        $mail = $patient->getTelephone();

        $this->assertEquals(0605040302, $mail, "getTelephone returns a bad value.");
    }
    // -----------------------------------

    public function testNomIsInvalid()
    {
        $kernel = self::bootKernel();
        $validator = $kernel->getContainer()->get('validator');
        $patient = new Patient();
        $patient->setNom("PA");
        $errors = $validator->validate($patient);

        $this->assertCount(1, $errors, "Une erreur est attendue car moins de 3 chars");
        $this->assertEquals(1, count($errors), "Une erreur est attendue car moins de 3 chars");
        $this->assertEquals("Your name must be at least 3 characters long", $errors[0]->getMessage());
    }

    // -----------------------------------

    public function testNomIsValid()
    {
        $kernel = self::bootKernel();
        $validator = $kernel->getContainer()->get('validator');
        $patient = new Patient();
        $patient->setNom("PAVART");
        $errors = $validator->validate($patient);

        $this->assertCount(0, $errors, "Une Erreur est attendue car plus de 3 chars");
        // $this->assertEquals(0, count($errors), "Une Erreur est attendue car plus de 3 chars");
    }
}
