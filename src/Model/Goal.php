<?php
/**
 * Created by PhpStorm.
 * User: mcnitch
 * Date: 24/10/18
 * Time: 10:56
 */

namespace Model;

class Goal
{
    private $id;

    private $encounter_id;

    private $player_id;

    private $goal;

    private $goal_time;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return  mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEncounterId()
    {
        return $this->encounter_id;
    }

    /**
     * @return  mixed $encounter_id
     */
    public function setEncounterId($encounter_id)
    {
        $this->encounter_id = $encounter_id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getGoal()
    {
        return $this->goal;
    }

    /**
     * @return  mixed $goal
     */
    public function setGoal($goal)
    {
        $this->goal = $goal;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getGoalTime()
    {
        return $this->goal_time;
    }

    /**
     * @return  $goal_time
     */
    public function setGoalTime($goal_time)
    {
        $this->goal_time = $goal_time;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPlayerId()
    {
        return $this->player_id;
    }

    /**
     * @return  mixed $player_id
     */
    public function setPlayerId($player_id)
    {
        $this->player_id = $player_id;
        return $this;
    }
}
