<?php

namespace Controller;

use Model\SessionManager;

class SessionController extends AbstractController
{
    public function login()
    {
        if (isset($_POST['admin'])) {
            $sessionManager = new SessionManager($this->getPdo());
            if (false === $sessionManager->selectAdmin($_POST)) {
                echo "Mauvais identifiants/mot de passe !";
            } else {
                session_start();
                $_SESSION['admin'] = $_POST['admin'];
                header('Location:/');
            }
        }
        return $this->twig->render('Session/session.html.twig');
    }

    public function logout()
    {
        session_unset();
        session_destroy();

        header("Location:/");
    }
}
