<?php

namespace App\Controller;

use App\Entity\Doctor;
use App\Entity\Cabinet;
use App\Entity\Patient;
use App\Entity\RendezVous;
use FOS\RestBundle\View\View;
use FOS\RestBundle\Controller\Annotations\Get;
use FOS\RestBundle\Controller\Annotations\Post;
use FOS\RestBundle\Controller\Annotations\Delete;
use FOS\RestBundle\Controller\AbstractFOSRestController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

class RendezVousController extends AbstractFOSRestController
{
    /**
     * @Get("/rendezvous")
     */
    public function findAll()
    {
        $rdv = $this->getDoctrine()->getRepository(RendezVous::class)->findAll();

        return View::create($rdv, 200);
    }

    /**
     * @Get("/rendezvous/{id}")
     */
    public function find(RendezVous $rendezVous)
    {

        return View::create($rendezVous, 200, ['Content-Type' => 'application/json']);
    }

    /**
     * @Delete("/rendezvous/{id}")
     */
    public function delete(RendezVous $rendezVous)
    {
        $manager = $this->getDoctrine()->getManager();
        $manager->remove($rendezVous);
        $manager->flush();
        return View::create($rendezVous, 200, ['Content-Type' => 'application/json']);
    }

    /**
     * @Post("/rendezvous")
     * @ParamConverter("rendezVous", converter="fos_rest.request_body")
     */
    public function newRendezVous(RendezVous $rendezVous)
    {

        // return View::create($rendezVous, 200);
        $manager = $this->getDoctrine()->getManager();
        $patientRepo = $this->getDoctrine()->getRepository(Patient::class);
        $doctorRepo = $this->getDoctrine()->getRepository(Doctor::class);
        $cabinetRepo = $this->getDoctrine()->getRepository(Cabinet::class);

        if ($patientRepo->find($rendezVous->getPatient()->getId()) == null) {
            $manager->persist($rendezVous->getPatient());
        } else {
            // faire connaitre patient a doctrine
            $patient = $patientRepo->find($rendezVous->getPatient()->getId());
            $rendezVous->setPatient($patient);
        }

        if ($doctorRepo->find($rendezVous->getDoctor()->getId()) == null) {
            $manager->persist($rendezVous->getDoctor());
        } else {
            // faire connaitre patient a doctrine
            $doctor = $doctorRepo->find($rendezVous->getDoctor()->getId());
            $rendezVous->setDoctor($doctor);
        }

        if ($cabinetRepo->find($rendezVous->getCabinet()->getId()) == null) {
            $manager->persist($rendezVous->getCabinet());
        } else {
            // faire connaitre patient a doctrine
            $cabinet = $cabinetRepo->find($rendezVous->getCabinet()->getId());
            $rendezVous->setCabinet($cabinet);
        }

        $manager->persist($rendezVous);
        $manager->flush();
        return View::create(null, 200);
    }

    /**
     * @Delete("/rendezvous/{id}")
     */
    public function deleteRendezVous(RendezVous $rendezVous)
    {
        $manager = $this->getDoctrine()->getManager();
        $manager->remove($rendezVous);
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