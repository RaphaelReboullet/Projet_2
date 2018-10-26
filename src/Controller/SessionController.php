<?php

namespace Controller;

use Model\Session, Model\SessionManager;


class SessionController extends AbstractController
{
    public function login()
    {

      $sessionManager = new SessionManager($this->getPdo());
      $session = $sessionManager->selectAdmin();

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        if ($session['admin'] === $_POST['admin'] and $session['password'] === $_POST['password']) {
            session_start();
        }
    }

     /*   $tab =
    /**$session = new Session();
    $session->getAdmin();
    $session->getPassword();
    $sessionManager = new SessionManager($this->getPdo());
    $admin = $sessionManager->selectAdmin($admin);
        $isPasswordCorrect = password_verify($_POST['password'], $sessionManager['password']);
        {
            if (!$sessionManager)
            {
                echo 'Mauvais identifiant ou mot de passe !';
            }
            else
            {
                if ($isPasswordCorrect) {
                    session_start();
                    $_SESSION['admin'] = $session['admin'];
                    echo 'Vous êtes connecté !';
                }
                else {
                    echo 'Mauvais identifiant ou mot de passe !';
                }
            }
        }*/

    return $this->twig->render('Session/session.html.twig', ['admin' => $_POST['admin'], 'password' => $_POST['password']]);
}
}