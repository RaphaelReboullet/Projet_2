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

/**
 * Class PlayerController
 * @package Controller
 */
class PlayerController extends AbstractController
{
    const METHODS = [
        'firstname' => ['setFirstname', 'getFirstname'],
        'lastname' => ['setLastname', 'getLastname'],
        'birthdate' => ['setBirthdate', 'getBirthdate'],
        'height' => ['setHeight', 'getHeight'],
        'weight' => ['setWeight', 'getWeight'],
        'position' => ['setPosition', 'getPosition'],
        'number' => ['setNumber', 'getNumber'],
        'isactif' => ['setIsactif', 'getIsactif'],
        'portrait' => ['setPortrait', 'getPortrait'],
    ];

    /**
     * @return string
     * @throws \Twig_Error_Loader
     * @throws \Twig_Error_Runtime
     * @throws \Twig_Error_Syntax
     */
    public function team()
    {
        $playerManager = new PlayerManager($this->getPdo());
        $players = $playerManager->selectAll();

        return $this->twig->render('Player/team.html.twig', ['players' => $players]);
    }

    /**
     * @param int $id
     * @return string
     * @throws \Twig_Error_Loader
     * @throws \Twig_Error_Runtime
     * @throws \Twig_Error_Syntax
     */
    public function playerDetails(int $id)
    {
        $playerManager = new PlayerManager($this->getPdo());
        $player = $playerManager->selectOneById($id);
        return $this->twig->render('Player/playerDetails.html.twig', ['playerDetails' => $player]);
    }

    /**
     * @return string
     * @throws \Twig_Error_Loader
     * @throws \Twig_Error_Runtime
     * @throws \Twig_Error_Syntax
     */
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

    /**
     * @param int $id
     */
    public function del(int $id)
    {
        $playerManager = new PlayerManager($this->getPdo());
        $playerManager->selectOneById($id);
        $player = new Player();

        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $player->setId($id);
            $player->setIsactif(0);
            $playerManager->update($player);
        }
        header('Location:/newteam');
    }

    /**
     * @return string
     * @throws \Twig_Error_Loader
     * @throws \Twig_Error_Runtime
     * @throws \Twig_Error_Syntax
     */
    public function welcome()
    {
        return $this->twig->render('Accueil/accueil_page.html.twig');
    }

    /**
     * @param int $id
     */
    public function modify(int $id)
    {
        $playerManager = new PlayerManager($this->getPdo());
        $player = $playerManager->selectOneById($id);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            foreach (array_keys($_POST) as $key) {
                if (array_key_exists($key, self::METHODS)) {
                    $value = $_POST[$key];
                    $setter = self::METHODS[$key][0];
                    $getter = self::METHODS[$key][1];
                    $value = $player->$setter($value)->$getter();
                    $playerManager->updateStat($id, $key, $value);
                }
            }
        }header('Location:/newteam/player/' . $id);
    }
}
