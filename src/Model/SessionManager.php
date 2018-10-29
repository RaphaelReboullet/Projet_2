<?php

namespace Model;

class SessionManager extends AbstractManager
{
    const TABLE = 'login';

    public function __construct(\PDO $pdo)
    {
        parent::__construct(self::TABLE, $pdo);
    }
}
