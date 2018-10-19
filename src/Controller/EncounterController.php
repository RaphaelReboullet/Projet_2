<?php
/**
 * Created by PhpStorm.
 * User: mcnitch
 * Date: 17/10/18
 * Time: 10:46
 */

namespace Controller;

use Model\Team;
use Model\TeamManager;
use Model\Encounter;
use Model\EncounterManager;

class EncounterController extends AbstractController
{
    public function encounter()
    {
        $encounterManager = new EncounterManager($this->getPdo());
        $encounters = $encounterManager->selectEncounter();
        $teamManager = new TeamManager($this->getPdo());
        $teams = $teamManager->selectTeam();

        return $this->twig->render('Encounter/encounter.html.twig', ['encounters' => $encounters, 'teams' => $teams]);
    }

    public function addEncounter()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $encounterManager = new EncounterManager($this->getPdo());
            $encounter = new Encounter();
            $encounter->setMatchDate($_POST['match_date']);
            $encounter->setTeamId($_POST['team_id']);
            $encounterManager->insertEncounter($encounter);
        }
        header('Location:/encounter');
    }
}
