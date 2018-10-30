<?php


namespace Controller;

class ContactFormController extends AbstractController
{


    public function formcontroll()
    {
        $username = $userfirstname = $userphone = $usermail = $userobject = '';


        $errors = null;


        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (empty($_POST["username"])) {
                $errors['name'] = "Votre nom est requis.";
            } else {
                $username = $this->testInput($_POST["username"]);
                // check if name only contains letters and whitespace
                if (!preg_match("/^[a-zA-Z ]*$/", $username)) {
                    $errors['name'] = "Seuls les lettres et espaces sont autorisés.";
                }
            }
            if (empty($_POST["userfirstname"])) {
                $errors['firstname'] = "Votre prénom est requis.";
            } else {
                $userfirstname = $this->testInput($_POST["userfirstname"]);
                // check if name only contains letters and whitespace
                if (!preg_match("/^[a-zA-Z ]*$/", $userfirstname)) {
                    $errors['firstname'] = "Seuls les lettres et espaces sont autorisés.";
                }
            }
            if (empty($_POST["userphone"])) {
                $errors['phone'] = "Votre numéro de téléphone est requis.";
            } else {
                $userphone = $this->testInput($_POST["userphone"]);

                if (!preg_match("`^0[0-9]([-. ]?\d{2}){4}[-. ]?$`", $userphone)) {
                    $errors['phone'] = "Veuillez entrer un numéro valide.";
                }
            }
            if (empty($_POST["usermail"])) {
                $errors['mail'] = "Votre email est requis.";
            } else {
                $usermail = $this->testInput($_POST["usermail"]);
                // check if e-mail address is well-formed
                if (!filter_var($usermail, FILTER_VALIDATE_EMAIL)) {
                    $errors['mail'] = "Email invalide.";
                }
            }

            if (empty($_POST["userobject"])) {
                $userobject = "L'objet est requis";
            } else {
                $userobject = $this->testInput($_POST["userobject"]);
            }


        }

        return $this->twig->render('ContactForm/contactform.html.twig', ['errors' => $errors, '_POST' => $_POST]);
    }

    public function testInput($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
}
