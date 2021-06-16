<?php

namespace App\Tests\Entity;

use App\Entity\Doctor;
use App\Entity\Cabinet;
use App\Entity\Patient;
use App\Entity\RendezVous;
use PHPUnit\Framework\TestCase;

class rendezVousTest extends TestCase
{
    public function testSetDate()
    {
        $patient = new RendezVous();
        $patient->setDate(date_create('1999-10-10'));
        $date = $patient->getDate();

        $this->assertEquals(date_create('1999-10-10'), $date, "setDate returns a bad value.");
    }

    public function testGetDate()
    {
        $patient = new RendezVous();
        $patient->setDate(date_create('1999-10-10'));
        $date = $patient->getDate();

        $this->assertEquals(date_create('1999-10-10'), $date, "getDate returns a bad value.");
    }
    // -----------------------------------

    public function testSetPatientId()
    {
        $patient = new RendezVous();
        $pat = new Patient();
        $patient->setPatientId($pat);
        $patient_id = $patient->getPatientId();

        $this->assertEquals($pat, $patient_id, "setPatientId returns a bad value.");
    }

    public function testGetPatientId()
    {
        $patient = new RendezVous();
        $pat = new Patient();
        $patient->setPatientId($pat);
        $patient_id = $patient->getPatientId();

        $this->assertEquals($pat, $patient_id, "getPatientId returns a bad value.");
    }
    // -----------------------------------

    public function testSetDocteurId()
    {
        $patient = new RendezVous();
        $doc = new Doctor();
        $patient->setDoctorId($doc);
        $docteur_id = $patient->getDoctorId();

        $this->assertEquals($doc, $docteur_id, "setDoctorId returns a bad value.");
    }

    public function testGetDocteurId()
    {
        $patient = new RendezVous();
        $doc = new Doctor();
        $patient->setDoctorId($doc);
        $docteur_id = $patient->getDoctorId();

        $this->assertEquals($doc, $docteur_id, "getDoctorId returns a bad value.");
    }
    // -----------------------------------

    public function testSetCabinetId()
    {
        $patient = new RendezVous();
        $cab = new Cabinet();
        $patient->setCabinetId($cab);
        $cabinet_id = $patient->getCabinetId();

        $this->assertEquals($cab, $cabinet_id, "setCabinetId returns a bad value.");
    }

    public function testGetCabinetId()
    {
        $patient = new RendezVous();
        $cab = new Cabinet();
        $patient->setCabinetId($cab);
        $cabinet_id = $patient->getCabinetId();

        $this->assertEquals($cab, $cabinet_id, "getCabinetId returns a bad value.");
    }
    // -----------------------------------
}
