<?php

namespace App\Controller;

use App\Entity\Patient;
use FOS\RestBundle\Controller\AbstractFOSRestController;
use FOS\RestBundle\Controller\Annotations\Get;
use FOS\RestBundle\Controller\Annotations\Post;
use FOS\RestBundle\View\View;

class PatientsController extends AbstractFOSRestController
{
    /**
     * @Get("/patients")
     */
    public function findAll()
    {

        $Patients = $this->getDoctrine()->getRepository(Patient::class)->findAll();

        return View::create($Patients, 200);
    }

    /**
     * @Get("/patients/{id}")
     */
    public function find(Patient $patient)
    {
        return View::create($patient, 200, ['Content-Type' => 'application/json']);
    }

    /**
     * @Post("/patients")
     */
    public function newPatient(Patient $patient)
    {
        $manager = $this->getDoctrine()->getManager();
        $manager->persist($patient);
        $manager->flush();
        return View::create(null, 200);
    }
}
