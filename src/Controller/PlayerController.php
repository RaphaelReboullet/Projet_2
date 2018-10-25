<?php
/**
 * Created by PhpStorm.
 * User: mcnitch, Damien-trqr, DavidLAVDEV, RaphaelReboullet

 * Date: 10/10/18
 * Time: 09:49
 */
namespace Controller;

use Model\Player;
use Model\PlayerManager;

class PlayerController extends AbstractController
{
    const METHODS = [
        'firstname' => 'setFirstname',
        'lastname' => 'setLastname',
        'birthdate' => 'setBirthdate',
        'height' => 'setHeight',
        'weight' => 'setWeight',
        'position' => 'setPosition',
        'number' => 'setNumber',
        'isactif' => 'setIsactif',
        'portrait' => 'setPortrait',
        ];

    public function team()
    {
        $playerManager = new PlayerManager($this->getPdo());
        $players = $playerManager->selectAll();

        return $this->twig->render('Player/team.html.twig', ['players' => $players]);
    }

    public function playerDetails(int $id)
    {
        $playerManager = new PlayerManager($this->getPdo());
        $player = $playerManager->selectOneById($id);
        return $this->twig->render('Player/playerDetails.html.twig', ['playerDetails' => $player]);
    }

    public function add()
    {

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $playerManager = new PlayerManager($this->getPdo());
            $player = new Player();
            $player->setFirstname($_POST['firstname']);
            $player->setLastname($_POST['lastname']);
            $player->setBirthdate($_POST['birthdate']);
            $player->setHeight($_POST['height']);
            $player->setWeight($_POST['weight']);
            $player->setPosition($_POST['position']);
            $player->setNumber($_POST['number']);
            $player->setIsactif($_POST['isactif']);
            $player->setPortrait($_POST['portrait']);
            $id = $playerManager->insert($player);

            header('Location:/newteam/player/' . $id);
        }
        return $this->twig->render('Player/add.html.twig');
    }
    // TODO : supprimer method del car = modify
    public function del(int $id)
    {
        $playerManager = new PlayerManager($this->getPdo());
        $player = $playerManager->selectOneById($id);

        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $player->setIsactif(0);
            $playerManager->update($player);
        }
        header('Location:/newteam');
    }

    public function welcome()
    {
        return $this->twig->render('Accueil/accueil_page.html.twig');
    }

    public function modify(int $id,string $col)
    {
        if (key_exists($col, self::METHODS)) {
            $method = self::METHODS[$col];
        }
        $playerManager = new PlayerManager($this->getPdo());
        $player = $playerManager->selectOneById($id);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $player->$method($var);
            $playerManager->updateStat($player);
        }
    }
}

