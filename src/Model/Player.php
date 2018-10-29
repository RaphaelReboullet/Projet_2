<?php
/**
 * Created by PhpStorm.
 * User: mcnitch
 * Date: 10/10/18
 * Time: 10:03
 */

namespace Model;

class Player
{
    public $id;

    public $firstname;

    public $lastname;

    public $birthdate;

    public $height;

    public $weight;

    public $position;

    public $number;

    public $isactif;

    public $portrait;

    /**
     * @return int
     */
    public function getId() :int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getFirstname() :string
    {
        return $this->firstname;
    }

    /**
     * @param string $firstname
     * @return string
     */
    public function setFirstname(string $firstname) :string
    {

        return $this->firstname = $firstname;
    }

    /**
     * @return string
     */
    public function getLastname() :string
    {
        return $this->lastname;
    }

    /**
     * @param string $lastname
     * @return string
     */
    public function setLastname(string $lastname) :string
    {

        return $this->lastname = $lastname;
    }

    /**
     * @return string
     */
    public function getBirthdate() :string
    {
        return $this->birthdate;
    }

    /**
     * @param string $birthdate
     * @return string
     */
    public function setBirthdate(string $birthdate) :string
    {
        $this->birthdate = date('Y-m-d', strtotime(str_replace('/', '-', $birthdate)));
        return $this->birthdate;
    }

    /**
     * @return int
     */
    public function getHeight() :int
    {
        return $this->height;
    }

    /**
     * @param string $height
     * @return int
     */
    public function setHeight(string $height) :int
    {

        return $this->height = $height;
    }

    /**
     * @return int
     */
    public function getWeight() :int
    {
        return $this->weight;
    }

    /**
     * @param string $weight
     * @return int
     */
    public function setWeight(string $weight) :int
    {
        return $this->weight = $weight;
    }

    /**
     * @return string
     */
    public function getPosition() :string
    {
        return $this->position;
    }

    /**
     * @param string $position
     * @return string
     */
    public function setPosition(string $position) :string
    {
        return $this->position = $position;
    }

    /**
     * @return int
     */
    public function getNumber() :int
    {
        return $this->number;
    }

    /**
     * @param int $number
     * @return int
     */
    public function setNumber(int $number) :int
    {

        return $this->number = $number;
    }

    /**
     * @return bool
     */
    public function getIsactif() :bool
    {
        return $this->isactif;
    }

    /**
     * @param $isactif
     * @return bool
     */
    public function setIsactif($isactif) :bool
    {
        return $this->isactif = $isactif;
    }

    /**
     * @return mixed
     */
    public function getPortrait()
    {
        return $this->portrait;
    }

    /**
     * @param $portrait
     * @return mixed
     */
    public function setPortrait($portrait)
    {
        return $this->portrait = $portrait;
    }
}
