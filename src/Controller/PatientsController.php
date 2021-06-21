<?php

namespace App\Controller;

use App\DTO\PatientDTO;
use App\Entity\Patient;
use App\Mapper\PatientMapper;
use FOS\RestBundle\View\View;
use FOS\RestBundle\Controller\Annotations\Get;
use FOS\RestBundle\Controller\Annotations\Post;
use FOS\RestBundle\Controller\Annotations\Delete;
use FOS\RestBundle\Controller\AbstractFOSRestController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

class PatientsController extends AbstractFOSRestController
{
    /**
     * @Get("/patients")
     */
    public function findAll()
    {
        $patients = $this->getDoctrine()->getRepository(Patient::class)->findAll();
        $patientDTOs = [];
        foreach ($patients as $patient) {
            $mapper = new PatientMapper;
            $patientDTO = $mapper->convertPatientEntityToPatientDTO($patient);
            $patientDTOs[] = $patientDTO;
        }
        return View::create($patientDTOs, 200);
    }

    /**
     * @Get("/patients/{id}")
     */
    public function find(PatientDTO $patientDTO)
    {
        return View::create($patientDTO, 200, ['Content-Type' => 'application/json']);
    }

    /**
     * @Post("/patients")
     * @ParamConverter("patient", converter="fos_rest.request_body")
     */
    public function newPatient(PatientDTO $patientDTO)
    {
        $manager = $this->getDoctrine()->getManager();
        $manager->persist($patientDTO);
        $manager->flush();
        return View::create(null, 200);
    }

    /**
     * @Delete("/patients/{id}")
     */
    public function deletePatient(PatientDTO $patientDTO)
    {
        $manager = $this->getDoctrine()->getManager();
        $manager->remove($patientDTO);
        $manager->flush();
        return View::create(null, 200);
    }
}

// public function create(Patient $patient)
// {
// $manager = $this->getDoctrine()->getManager();
// $repo = $this->getDoctrine()->getRepository(Medecin::class);
// if ($repo->find($patient->getMedecin()->getId()) == null) {
//     $manager->persist($patient->getMedecin());
// } else {
//     // faire connaitre medecin a doctrine
//     $medecin = $repo->find($patient->getMedecin()->getId());
//     $patient->setMedecin($medecin);
// }
// $this->$manager->persist($patient);
// $manager->flush();
// return View::create(null, 200);
// }