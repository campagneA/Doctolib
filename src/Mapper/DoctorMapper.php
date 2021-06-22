<?php

namespace App\Mapper;

use App\DTO\DoctorDTO;
use App\Entity\Doctor;

class DoctorMapper
{

    public function convertDoctorEntityToDoctorDTO(Doctor $doctor): DoctorDTO
    {
        $dDTO = (new DoctorDTO())
            ->setId($doctor->getId())
            ->setFirstName($doctor->getFirstName())
            ->setLastName($doctor->getLastName());

        return $dDTO;
    }

    // public function convertDoctorEntityToDoctorEntity(DoctorDTO $doctorDTO)
    // {
    //     $doctor = (new Doctor())
    //         ->setId($doctor->getId())
    //         ->setFirstName($doctor->getFirstName())
    //         ->setLastName($doctor->getLastName());

    //     return $dDTO;
    // }
}
