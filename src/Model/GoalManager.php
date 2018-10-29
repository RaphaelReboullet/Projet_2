<?php
/**
 * Created by PhpStorm.
 * User: mcnitch
 * Date: 19/10/18
 * Time: 07:24
 */

namespace Model;

class GoalManager extends AbstractManager
{
    const TABLE = 'goal';

    public function __construct(\PDO $pdo)
    {
        parent::__construct(self::TABLE, $pdo);
    }

    public function insert(Goal $goal): int
    {
        $statement = $this->pdo->prepare("INSERT INTO $this->table (`encounter_id`, `player_id`, `goal`, `goal_time`) 
                                                    VALUES (:encounter_id, :player_id, :goal, :goal_time)");
        $statement->bindValue('encounter_id', $goal->getEncounterId(), \PDO::PARAM_INT);
        $statement->bindValue('player_id', $goal->getPlayerId(), \PDO::PARAM_INT);
        $statement->bindValue('goal', $goal->getGoal(), \PDO::PARAM_INT);
        $statement->bindValue('goal_time', $goal->getGoalTime(), \PDO::PARAM_STR);

        if ($statement->execute()) {
            return $this->pdo->lastInsertId();
        }
    }
}
