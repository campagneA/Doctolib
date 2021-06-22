<?php

namespace App\DTO;

use OpenApi\Annotations as OA;

/**
 * @OA\Schema(
 *      description="Le DoctorDTO",
 *      title="Le DoctorDTO",
 *      required={"id"}
 * )
 */

class DoctorDTO
{

    /**
     * @OA\Property(
     *     format="int",
     *     description="Id du médecin",
     *     title="Id",
     * )
     */
    private $id;
    private $firstName;
    private $lastName;

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of name
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */
    public function setFirstName($firstName)
    {
        $this->name = $firstName;

        return $this;
    }

    /**
     * Get the value of lastName
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set the value of lastName
     *
     * @return  self
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }
}
