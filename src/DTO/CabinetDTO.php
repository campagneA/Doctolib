<?php

namespace App\DTO;

use OpenApi\Annotations as OA;

/**
 * @OA\Schema(
 *      description="Le CabinetDTO",
 *      title="Le CabinetDTO",
 *      required={"id"}
 * )
 */
class CabinetDTO
{
    /**
     * @OA\Property(
     *     format="int",
     *     description="Id du cabinet",
     *     title="Id",
     * )
     */
    private $id;

    /**
     * @OA\Property(
     *      format="string",
     *      description="Rue du cabinet",
     *      title="Street",
     * )
     */
    private $street;

    /**
     * @OA\Property(
     *      format="int",
     *      description="Numero du cabinet",
     *      title="Numero du cabinet",
     * )
     */
    private $number;

    /**
     * @OA\Property(
     *      format="string",
     *      description="Ville du cabinet",
     *      title="City",
     * )
     */
    private $city;

    /**
     * @OA\Property(
     *      format="int",
     *      description="Code Postal du cabinet",
     *      title="Postal",
     * )
     */
    private $postal;

    /**
     * @OA\Property(
     *      format="string",
     *      description="Nom du cabinet",
     *      title="Name",
     * )
     */
    private $name;


    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of street
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * Set the value of street
     *
     * @return  self
     */
    public function setStreet($street)
    {
        $this->street = $street;

        return $this;
    }

    /**
     * Get the value of number
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set the value of number
     *
     * @return  self
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get the value of city
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set the value of city
     *
     * @return  self
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get the value of postal
     */
    public function getPostal()
    {
        return $this->postal;
    }

    /**
     * Set the value of postal
     *
     * @return  self
     */
    public function setPostal($postal)
    {
        $this->postal = $postal;

        return $this;
    }

    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }
}
