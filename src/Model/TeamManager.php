<?php
/**
 * Created by PhpStorm.
 * User: mcnitch
 * Date: 17/10/18
 * Time: 10:27
 */

namespace Model;

class TeamManager extends AbstractManager
{

    const TABLE = 'team';

    public function __construct(\PDO $pdo)
    {
        parent::__construct(self::TABLE, $pdo);
    }

    public function insertTeam(Team $team): int
    {
        $statement = $this->pdo->prepare("INSERT INTO $this->table (`id`) VALUES (:id)");
        $statement->bindValue('id', $team->getId(), \PDO::PARAM_INT);

        if ($statement->execute()) {
            return $this->pdo->lastInsertId();
        }
    }
}

