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
}
