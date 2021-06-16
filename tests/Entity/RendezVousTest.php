<?php

namespace App\Tests\Entity;

use App\Entity\Patient;
use PHPUnit\Framework\TestCase;
use App\Entity\RendezVous;

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
        $patient->setPatientId();
        $patient_id = $patient->getPatientId();

        $this->assertEquals(1, $patient_id, "setPatientId returns a bad value.");
    }

    public function testGetPatientId()
    {
        $patient = new RendezVous();
        $patient->setPatientId(1);
        $patient_id = $patient->getPatientId();

        $this->assertEquals(0, $patient_id, "getPatientId returns a bad value.");
    }
    // -----------------------------------

    public function testSetDocteurId()
    {
        $patient = new RendezVous();
        $patient->setDoctorId(null);
        $docteur_id = $patient->getDoctorId();

        $this->assertEquals(1, $docteur_id, "setDoctorId returns a bad value.");
    }

    public function testGetDocteurId()
    {
        $patient = new RendezVous();
        $patient->setDoctorId(null);
        $docteur_id = $patient->getDoctorId();

        $this->assertEquals(1, $docteur_id, "getDoctorId returns a bad value.");
    }
    // -----------------------------------

    public function testSetCabinetId()
    {
        $patient = new RendezVous();
        $patient->setCabinetId(null);
        $cabinet_id = $patient->getCabinetId();

        $this->assertEquals(1, $cabinet_id, "setCabinetId returns a bad value.");
    }

    public function testGetCabinetId()
    {
        $patient = new RendezVous();
        $patient->setCabinetId(null);
        $cabinet_id = $patient->getCabinetId();

        $this->assertEquals(1, $cabinet_id, "getCabinetId returns a bad value.");
    }
    // -----------------------------------
}
