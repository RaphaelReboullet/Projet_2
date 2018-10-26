<?php
/**
 * Created by PhpStorm.
 * User: sylvain
 * Date: 07/03/18
 * Time: 20:52
 * PHP version 7
 */

namespace Model;

/**
 * Abstract class handling default manager.
 */
abstract class AbstractManager
{
    /**
     * @var \PDO
     */
    protected $pdo; //variable de connexion

    /**
     * @var string
     */
    protected $table;
    /**
     * @var string
     */
    protected $className;


    /**
     * Initializes Manager Abstract class.
     * @param string $table
     * @param PDO $pdo
     */
    public function __construct(string $table, \PDO $pdo)
    {
        $this->table = $table;
        $this->className = __NAMESPACE__ . '\\' . ucfirst($table);
        $this->pdo = $pdo;
    }

    public function selectAdmin()
    {
    return $this->pdo->query('SELECT admin, password FROM ' . $this->table .
            ' WHERE admin = :admin ', \PDO::FETCH_CLASS, $this->className)->fetch();
    }


    /**
     *
     *
     * Get all row from database.
     *
     * @return array
     */
    public function selectAll(): array
    {
        return $this->pdo->query('SELECT * FROM ' . $this->table .
            ' WHERE isactif="1" ', \PDO::FETCH_CLASS, $this->className)->fetchAll();
    }

    /**
     * Get one row from database by ID.
     *
     * @param  int $id
     *
     * @return array
     */
    public function selectOneById(int $id)
    {
        // prepared request
        $statement = $this->pdo->prepare("SELECT * FROM $this->table WHERE id=:id");
        $statement->setFetchMode(\PDO::FETCH_CLASS, $this->className);
        $statement->bindValue('id', $id, \PDO::PARAM_INT);
        $statement->execute();

        return $statement->fetch();
    }

    public function selectEncounter(): array
    {
        return $this->pdo->query('SELECT match_date, team, flag, opponent_goal, COUNT(goal) AS goal
              FROM ' . $this->table . ' 
              LEFT JOIN team AS t ON ' . $this->table . '.team_id = t.id 
              LEFT JOIN goal AS g ON ' . $this->table . '.id = g.encounter_id 
                LEFT JOIN player AS p ON g.player_id = p.id
              GROUP BY ' . $this->table . '.id
              ORDER BY match_date;', \PDO::FETCH_CLASS, $this->className)->fetchAll();
    }

    public function selectTeam(): array
    {
        return $this->pdo->query('SELECT id, team FROM ' . $this->table . ' 
                                            ORDER BY team;', \PDO::FETCH_CLASS, $this->className)->fetchAll();
    }
}
