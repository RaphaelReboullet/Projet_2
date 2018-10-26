<?php

namespace Model;

class SessionManager extends AbstractManager
{
    const TABLE = 'admin';

    public function __construct(\PDO $pdo)
    {
        parent::__construct(self::TABLE, $pdo);
    }


}