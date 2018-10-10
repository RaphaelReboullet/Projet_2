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
    private $firstname;

    private $lastname;

    private $birthdate;

    private $height;

    private $weight;

    private $position;

    private $number;

    private $isactif;


    public function getFirstname() :string
    {
        return $this->firstname;
    }

    public function setFirstname($firstname) :string
    {
        $this->firstname = $firstname;
        return $firstname;
    }

    public function getLastname() :string
    {
        return $this->lastname;
    }

    public function setLastname($lastname) :string
    {
        $this->lastname = $lastname;
        return $lastname;
    }

    public function getBirthdate() :int
    {
        return $this->birthdate;
    }

    public function setBirthdate($birthdate) :int
    {
        $this->birthdate = $birthdate;
        return $birthdate;
    }

    public function getHeight() :int
    {
        return $this->height;
    }

    public function setHeight($height) :int
    {
        $this->height = $height;
        return $height;
    }

    public function getWeight() :int
    {
        return $this->weight;
    }

    public function setWeight($weight) :int
    {
        $this->weight = $weight;
        return $weight;
    }

    public function getPosition() :int
    {
        return $this->position;
    }

    public function setPosition($position) :int
    {
        $this->position = $position;
        return $position;
    }

    public function getNumber() :int
    {
        return $this->number;
    }

    public function setNumber($number) :int
    {
        $this->number = $number;
        return $number;
    }

    public function setIsactif($isactif) :bool
    {
        $this->isactif = $isactif;
        return $isactif;
    }
}
