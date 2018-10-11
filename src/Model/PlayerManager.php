<?php
/**
 * Created by PhpStorm.
 * User: mcnitch
 * Date: 10/10/18
 * Time: 09:49
 */

namespace Model;

class PlayerManager extends AbstractManager
{
    const TABLE = 'player';

    public function __construct(\PDO $pdo)
    {
        parent::__construct(self::TABLE, $pdo);
    }

    public function insert(Item $item): int
    {
        // prepared request
        $statement = $this->pdo->prepare("INSERT INTO $this->table (`title`) VALUES (:title)");
        $statement->bindValue('title', $item->getTitle(), \PDO::PARAM_STR);


        if ($statement->execute()) {
            return $this->pdo->lastInsertId();
        }
    }
}
