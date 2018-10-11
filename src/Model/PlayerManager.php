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

    public function insert(Player $player): int
    {
        // prepared request
        $statement = $this->pdo->prepare("INSERT 
        INTO $this->table (`firstname`, `lastname`, `birthdate`, `height`, `weight`, `position`, `number`, `isactif`) 
        VALUES (:firstname, :lastname, :birthdate, :height, :weight, :position, :number, :isactif)");
        $statement->bindValue('firstname', $player->getFirstname(), \PDO::PARAM_STR);
        $statement->bindValue('lastname', $player->getLastname(), \PDO::PARAM_STR);
        $statement->bindValue('birthdate', $player->getBirthdate(), \PDO::PARAM_STR);
        $statement->bindValue('height', $player->getHeight(), \PDO::PARAM_STR);
        $statement->bindValue('weight', $player->getWeight(), \PDO::PARAM_INT);
        $statement->bindValue('position', $player->getPosition(), \PDO::PARAM_STR);
        $statement->bindValue('number', $player->getNumber(), \PDO::PARAM_INT);
        $statement->bindValue('isactif', $player->getIsactif(), \PDO::PARAM_BOOL);

        if ($statement->execute()) {
            return $this->pdo->lastInsertId();
        }
    }
}
