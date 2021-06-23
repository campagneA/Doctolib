<?php

namespace App\Controller;

use App\DTO\PatientDTO;
use App\Entity\Patient;
use App\Mapper\PatientMapper;
use FOS\RestBundle\View\View;
use App\Service\PatientService;
use FOS\RestBundle\Controller\Annotations\Get;
use FOS\RestBundle\Controller\Annotations\Post;
use FOS\RestBundle\Controller\Annotations\Delete;
use FOS\RestBundle\Controller\AbstractFOSRestController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use OpenApi\Annotations as OA;


class PatientsController extends AbstractFOSRestController
{

    private $patientService;

    public function __construct(PatientService $patientService)
    {
        $this->patientService = $patientService;
    }

    /**
     * @Get("/patients")
     */
    public function findAll()
    {
        // $patients = $this->getDoctrine()->getRepository(Patient::class)->findAll();
        // $patientDTOs = [];
        // foreach ($patients as $patient) {
        //     $mapper = new PatientMapper;
        //     $patientDTO = $mapper->convertPatientEntityToPatientDTO($patient);
        //     $patientDTOs[] = $patientDTO;
        // }
        // return View::create($patientDTOs, 200);

        $patientsDto = $this->patientService->findAll();
        return View::create($patientsDto, 200, ["content-type" => "application/json"]);
    }

    /**
     * @Get("/patients/{id}")
     */
    public function find(PatientDTO $patientDTO)
    {
        return View::create($patientDTO, 200, ['Content-Type' => 'application/json']);
    }

    /**
     * Add a new patient
     * 
     * @OA\Post(
     *     path="/patients",
     *     tags={"Ajouter patient"},
     *     operationId="create",
     *     @OA\Response(
     *         response=201,
     *         description="Patient created successfully"
     *     )
     * )
     * @Post("/patients")
     * @ParamConverter("patient", converter="fos_rest.request_body")
     */
    public function newPatient(PatientDTO $patientDTO)
    {
        $manager = $this->getDoctrine()->getManager();
        $manager->persist($patientDTO);
        $manager->flush();
        return View::create(null, 200);

        // if (!$this->patientService->save($patientDTO)) {
        //     return View::create(null, 404);
        // }
        // return View::create(null, 201);
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

        // if (!$this->patientService->save($patientDTO)) {

        //     return View::create(null, 404);
        // }
        // return View::create(null, 201);
    }
}
