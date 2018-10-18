<?php
/**
 * Created by PhpStorm.
 * User: mcnitch
 * Date: 17/10/18
 * Time: 10:27
 */

namespace Model;

class EncounterManager extends AbstractManager
{

    const TABLE = 'encounter';

    public function __construct(\PDO $pdo)
    {
        parent::__construct(self::TABLE, $pdo);
    }

    public function insertEncounter(Encounter $encounter): int
    {
        $statement = $this->pdo->prepare("INSERT INTO $this->table (`match_date`) VALUES (:match_date)");
        $statement->bindValue('match_date', $encounter->getMatchDate(), \PDO::PARAM_STR);

        if ($statement->execute()) {
            return $this->pdo->lastInsertId();
        }
    }
}
