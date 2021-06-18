<?php

namespace App\Controller;

use App\Entity\Doctor;
use FOS\RestBundle\Controller\AbstractFOSRestController;
use FOS\RestBundle\Controller\Annotations\Get;
use FOS\RestBundle\View\View;

class DoctorController extends AbstractFOSRestController
{
    /**
     * @Get("doctors")
     */
    public function index()
    {


        $doctors = $this->getDoctrine()->getRepository(Doctor::class)->findAll();
        return View::create($doctors, 200);
    }
}
