<?php

namespace App\Mapper;

use App\DTO\CabinetDTO;
use App\Entity\Cabinet;

class CabinetMapper
{
    public function convertCabinetEntityToCabinetDTO(Cabinet $cabinet): CabinetDTO
    {
        $cDTO = (new CabinetDTO())->setId($cabinet->getId())
            ->setStreet($cabinet->getStreet())
            ->setNumber($cabinet->getNumber())
            ->setCity($cabinet->getCity())
            ->setPostal($cabinet->getPostal())
            ->setName($cabinet->getName());
        return $cDTO;
    }
}
