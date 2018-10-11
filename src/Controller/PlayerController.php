<?php
/**
 * Created by PhpStorm.
 * User: mcnitch
 * Date: 10/10/18
 * Time: 09:49
 */

namespace Controller;

use Model\Player;
use Model\PlayerManager;

class PlayerController extends AbstractController
{
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

    public function addPlayer()
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
            $id = $playerManager->insert($player);
            header('Location:/player/' . $id);
        }
        return $this->twig->render('Player/add.html.twig');
    }
}
