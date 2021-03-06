<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 11/10/17
 * Time: 15:38
 * PHP version 7
 */

namespace Controller;

use Twig_Loader_Filesystem;
use Twig_Environment;

use App\Connection;

/**
 *
 */
abstract class AbstractController
{
    /**
     * @var Twig_Environment
     */
    protected $twig;

    /**
     * @var \PDO
     */
    protected $pdo;

    /**
     *  Initializes this class.
     */
    public function __construct()
    {
        $loader = new Twig_Loader_Filesystem(APP_VIEW_PATH);
        $this->twig = new Twig_Environment(
            $loader,
            [
                'cache' => !APP_DEV,
                'debug' => APP_DEV,
            ]
        );
        if (empty($_SESSION)) {
            session_start();
            $_session['login']= '';
        }
        $this->twig->addGlobal('session', $_SESSION);
        $this->twig->addGlobal('post', $_POST);
        $this->twig->addExtension(new \Twig_Extension_Debug());
        $this->twig->addFilter(new \Twig_SimpleFilter('cast_to_array', function ($stdClassObject) {
            $response = array();
            foreach ($stdClassObject as $key => $value) {
                $response[] = array($key, $value);
            }
            return $response;
        }));
        $connection = new Connection();
        $this->pdo = $connection->getPdoConnection();
    }

    /**
     * @return \PDO
     */
    public function getPdo(): \PDO
    {
        return $this->pdo;
    }
}
