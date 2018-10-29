<?php
/**
 * Created by PhpStorm.
 * User: mcnitch, Damien-trqr, DavidLAVDEV, RaphaelReboullet
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
     * @param int $id
     * @return Player
     */
    public function setId(int $id) :Player
    {
        $this->id = $id;
        return $this;
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
     * @return Player
     */
    public function setFirstname(string $firstname) :Player
    {
        $this->firstname = $firstname;
        return $this;
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
     * @return Player
     */
    public function setLastname(string $lastname) :Player
    {
        $this->lastname = $lastname;
        return $this;
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
     * @return Player
     */
    public function setBirthdate(string $birthdate) :Player
    {
        $this->birthdate = date('Y-m-d', strtotime(str_replace('/', '-', $birthdate)));
        return $this;
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
     * @return Player
     */
    public function setHeight(string $height) :Player
    {
        $this->height = $height;
        return $this;
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
     * @return Player
     */
    public function setWeight(string $weight) :Player
    {
        $this->weight = $weight;
        return $this;
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
     * @return Player
     */
    public function setPosition(string $position) :Player
    {
        $this->position = $position;
        return $this;
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
     * @return Player
     */
    public function setNumber(int $number) :Player
    {
        $this->number = $number;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsactif() :bool
    {
        return $this->isactif;
    }

    /**
     * @param int $isactif
     * @return Player
     */
    public function setIsactif(int $isactif) :Player
    {
        $this->isactif = $isactif;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPortrait() :string
    {
        return $this->portrait;
    }

    /**
     * @param $portrait
     * @return mixed
     */
    public function setPortrait(string $portrait) :Player
    {
        $this->portrait = $portrait;
        return $this;
    }
}
