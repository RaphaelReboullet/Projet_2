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
}
