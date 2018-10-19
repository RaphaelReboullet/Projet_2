<?php
/**
 * Created by PhpStorm.
 * User: mcnitch
 * Date: 18/10/18
 * Time: 10:20
 */

namespace Model;

class Team
{
    private $id;

    private $team;

    /**
     * @return mixed
     */
    public function getId(): int
    {
        return $this->id;
    }

    public function setId($id): Team
    {
        $this->id = $id;
        return $this;
    }

    public function getTeam(): string
    {
        return $this->team;
    }

    public function setTeam($team): Team
    {
        $this->team = $team;
        return $this;
    }
}
