<?php
/**
 * Created by PhpStorm.
 * User: mcnitch, Damien-trqr, DavidLAVDEV, RaphaelReboullet
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

    /**
     * @param Player $player
     * @return int
     */
    public function insert(Player $player): int
    {
        // prepared request
        $statement = $this->pdo->prepare("INSERT INTO $this->table 
              (`firstname`, `lastname`, `birthdate`, `height`, `weight`, `position`, `number`, `isactif`, `portrait`) 
        VALUES 
              (:firstname, :lastname, :birthdate, :height, :weight, :position, :number, :isactif, :portrait)");
        $statement->bindValue('firstname', $player->getFirstname(), \PDO::PARAM_STR);
        $statement->bindValue('lastname', $player->getLastname(), \PDO::PARAM_STR);
        $statement->bindValue('birthdate', $player->getBirthdate(), \PDO::PARAM_STR);
        $statement->bindValue('height', $player->getHeight(), \PDO::PARAM_STR);
        $statement->bindValue('weight', $player->getWeight(), \PDO::PARAM_INT);
        $statement->bindValue('position', $player->getPosition(), \PDO::PARAM_STR);
        $statement->bindValue('number', $player->getNumber(), \PDO::PARAM_INT);
        $statement->bindValue('isactif', $player->getIsactif(), \PDO::PARAM_BOOL);
        $statement->bindValue('portrait', $player->getPortrait(), \PDO::PARAM_STR);

        if ($statement->execute()) {
            return $this->pdo->lastInsertId();
        }
    }

    public function delete(int $id): void
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $statement = $this->pdo->prepare("DELETE FROM $this->table WHERE id=:id");
            $statement->bindValue('id', $id, \PDO::PARAM_INT);
            $statement->execute();
        }
    }

    public function update(Player $player):int
    {
        // prepared request
        $statement = $this->pdo->prepare("UPDATE $this->table SET `isActif` = :isActif WHERE id=:id");
        $statement->bindValue('id', $player->getId(), \PDO::PARAM_INT);
        $statement->bindValue('isActif', $player->getisActif(), \PDO::PARAM_INT);

        return $statement->execute();
    }
}
