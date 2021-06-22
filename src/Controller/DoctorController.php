<?php

namespace App\Controller;

use App\DTO\DoctorDTO;
use App\Entity\Doctor;
use App\Mapper\DoctorMapper;
use FOS\RestBundle\View\View;
use App\Service\DoctorService;
use Doctrine\Persistence\ObjectManager;
use FOS\RestBundle\Controller\Annotations\Get;
use FOS\RestBundle\Controller\Annotations\Post;
use FOS\RestBundle\Controller\Annotations\Delete;
use FOS\RestBundle\Controller\AbstractFOSRestController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use OpenApi\Annotations as OA;


class DoctorController extends AbstractFOSRestController
{

    // private $doctorService;

    // public function __construct(DoctorService $doctorService)
    // {
    //     $this->doctorService;
    // }


    /**
     * @Get("doctors")
     */
    public function index()
    {
        $doctors = $this->getDoctrine()->getRepository(Doctor::class)->findAll();
        $doctorsDTOs = [];
        foreach ($doctors as $doctor) {
            $mapper = new DoctorMapper();
            $doctorDTO = $mapper->convertDoctorEntityToDoctorDTO($doctor);
            $doctorsDTOs[] = $doctorDTO;
        }
        return View::create($doctorsDTOs, 200, ['content-type' => "application/json"]);
    }

    /**
     * @Get("doctors/{id}")
     */
    public function getId(DoctorDTO $doctorDTO)
    {
        return View::create($doctorDTO, 200, ['content-type' => "application/json"]);
    }

    /**
     *     * Add a new doctor to the store
     * 
     * @OA\Post(
     *     path="/doctors",
     *     tags={"Ajouter doctor"},
     *     operationId="addDoctor",
     *     @OA\Response(
     *         response=200,
     *         description="Patient created successfully"
     *     )
     * )
     * @Post("doctors/add")
     * @ParamConverter("doctor", converter="fos_rest.request_body")
     */
    public function addDoctor(Doctor $doctor)
    {

        $manager = $this->getDoctrine()->getManager();
        $manager->persist($doctor);
        $manager->flush();

        return View::create(null, 200);
    }

    /**
     * @Delete("doctors/delete/{id}")
     */
    public function delete(Doctor $doctor)
    {
        $manager = $this->getDoctrine()->getManager();
        $manager->remove($doctor);
        $manager->flush();

        return View::create(null, 200,);
    }

    // /**
    //  * @Get("doctors/{id}")
    //  */
    // public function find(int $id)
    // {
    //     $doctors = $this->getDoctrine()->getRepository(Doctor::class)->find($id);

    //     return View::create($doctors, 200);
    // }
}
