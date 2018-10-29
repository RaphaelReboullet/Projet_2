<?php
/**
 * Created by PhpStorm.
 * User: mcnitch
 * Date: 17/10/18
 * Time: 10:46
 */

namespace Controller;

use Model\TeamManager;
use Model\Encounter;
use Model\EncounterManager;
use Model\PlayerManager;

class EncounterController extends AbstractController
{
    public function encounter()
    {
        $encounterManager = new EncounterManager($this->getPdo());
        $encounters = $encounterManager->selectEncounter();
        $teamManager = new TeamManager($this->getPdo());
        $teams = $teamManager->selectTeam();
        $playerManager = new PlayerManager($this->getPdo());
        $players = $playerManager->selectAll();


        return $this->twig->render('Encounter/encounter.html.twig', ['encounters' => $encounters,
            'teams' => $teams, 'players' => $players]);
    }

    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $encounterManager = new EncounterManager($this->getPdo());
            $encounter = new Encounter();
            $encounter->setMatchDate($_POST['match_date']);
            $encounter->setTeamId($_POST['team_id']);
            $encounterManager->insert($encounter);
        }
        header('Location:/encounter');
    }

    public function edit(): string
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $encounterManager = new EncounterManager($this->getPdo());
            $encounter = $encounterManager->selectOneById($_POST['id']);
            $encounter->setOpponentGoal($_POST['opponent_goal']);
            $encounterManager->update($encounter);
        }
        header('Location:/encounter#encounter-' . $_POST['id']);
    }
}
