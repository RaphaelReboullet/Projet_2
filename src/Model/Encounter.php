<?php
/**
 * Created by PhpStorm.
 * User: mcnitch
 * Date: 17/10/18
 * Time: 10:25
 */

namespace Model;

class Encounter
{
    private $id;

    private $matchDate;

    private $opponentGoal;

    private $teamId;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId($id): Encounter
    {
        $this->id = $id;
        return $this;
    }

    public function getMatchDate(): string
    {
        return $this->matchDate;
    }

    public function setMatchDate($matchDate): Encounter
    {
        $this->matchDate = date('Y-m-d', strtotime(str_replace('/', '-', $matchDate)));
        return $this;
    }

    public function getOpponentGoal(): int
    {
        return $this->opponentGoal;
    }

    public function setOpponentGoal($opponentGoal): Encounter
    {
        $this->opponentGoal = $opponentGoal;
        return $this;
    }

    public function getTeamId() :int
    {
        return $this->teamId;
    }

    public function setTeamId($teamId): Encounter
    {
        $this->teamId = $teamId;
        return $this;
    }
}
