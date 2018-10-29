<?php
/**
 * Created by PhpStorm.
 * User: mcnitch
 * Date: 26/10/18
 * Time: 12:38
 */

namespace Controller;

use Model\PlayerManager;
use Model\Goal;
use Model\GoalManager;

class GoalController extends AbstractController
{
    public function goal()
    {
        $goalManager = new GoalManager($this->getPdo());
        $goals = $goalManager->selectGoal();

        return $this->twig->render('Encounter/encounter.html.twig', ['goals' => $goals]);
    }

    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $goalManager = new GoalManager($this->getPdo());
            $goal = new Goal();
            $goal->setEncounterId($_POST['encounter_id']);
            $goal->setPlayerId($_POST['player_id']);
            $goal->setGoal($_POST['goal']);
            $goal->setGoalTime($_POST['goal_time']);
            $goalManager->insert($goal);
        }
        header('Location:/encounter#encounter-'. $_POST['encounter_id']);
    }
}
