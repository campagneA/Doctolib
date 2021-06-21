<?php

namespace App\Controller;

use App\DTO\CabinetDTO;
use App\Entity\Cabinet;
use App\Mapper\CabinetMapper;
use FOS\RestBundle\View\View;
use FOS\RestBundle\Controller\Annotations\Get;
use FOS\RestBundle\Controller\Annotations\Post;
use FOS\RestBundle\Controller\Annotations\Delete;
use FOS\RestBundle\Controller\AbstractFOSRestController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

class CabinetsController extends AbstractFOSRestController
{
    /**
     * @Get("/cabinets")
     */
    public function findAll()
    {
        $cabinets = $this->getDoctrine()->getRepository(Cabinet::class)->findAll();
        $cabinetDTOs = [];
        foreach ($cabinets as $cabinet) {
            $mapper = new CabinetMapper;
            $cabinetDTO = $mapper->convertCabinetEntityToCabinetDTO($cabinet);
            $cabinetDTOs[] = $cabinetDTO;
        }
        return View::create($cabinetDTOs, 200);
    }

    /**
     * @Get("/cabinets/{id}")
     */
    public function find(CabinetDTO $cabinetDTO)
    {
        return View::create($cabinetDTO, 200, ['Content-Type' => 'application/json']);
    }

    /**
     * @Post("/cabinets")
     * @ParamConverter("cabinet", converter="fos_rest.request_body")
     */
    public function newcabinet(CabinetDTO $cabinetDTO)
    {
        $manager = $this->getDoctrine()->getManager();
        $manager->persist($cabinetDTO);
        $manager->flush();
        return View::create(null, 200);
    }

    /**
     * @Delete("/cabinets/{id}")
     */
    public function deletecabinet(CabinetDTO $cabinetDTO)
    {
        $manager = $this->getDoctrine()->getManager();
        $manager->remove($cabinetDTO);
        $manager->flush();
        return View::create(null, 200);
    }
}
