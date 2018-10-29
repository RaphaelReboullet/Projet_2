<?php


namespace Controller;

class ContactFormController extends AbstractController
{


    public function formcontroll()
    {
        $username = $userfirstname = $userphone = $usermail = $userobject = '';
        $usernameErr = $userfirstnameErr = $userphoneErr = $usermailErr = $userobjectErr = '';




        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (empty($_POST["username"])) {
                $usernameErr = "Votre nom est requis.";
            } else {
                $username = $this->testInput($_POST["username"]);
                // check if name only contains letters and whitespace
                if (!preg_match("/^[a-zA-Z ]*$/", $username)) {
                    $usernameErr = "Seuls les lettres et espaces sont autorisés.";
                }
            }
            if (empty($_POST["userfirstname"])) {
                $userfirstnameErr = "Votre prénom est requis.";
            } else {
                $userfirstname = $this->testInput($_POST["userfirstname"]);
                // check if name only contains letters and whitespace
                if (!preg_match("/^[a-zA-Z ]*$/", $userfirstname)) {
                    $userfirstnameErr = "Seuls les lettres et espaces sont autorisés.";
                }
            }
            if (empty($_POST["userphone"])) {
                $userphoneErr = "Votre numéro de téléphone est requis.";
            } else {
                $userphone = $this->testInput($_POST["userphone"]);

                if (!preg_match("`^0[0-9]([-. ]?\d{2}){4}[-. ]?$`", $userphone)) {
                    $userphoneErr = "Veuillez entrer un numéro valide.";
                }
            }
            if (empty($_POST["usermail"])) {
                $usermailErr = "Votre email est requis.";
            } else {
                $usermail = $this->testInput($_POST["usermail"]);
                // check if e-mail address is well-formed
                if (!filter_var($usermail, FILTER_VALIDATE_EMAIL)) {
                    $usermailErr = "Email invalide.";
                }
            }

            if (empty($_POST["userobject"])) {
                $userobject = "L'objet est requis";
            } else {
                $userobject = $this->testInput($_POST["userobject"]);
            }


            if ($usernameErr === '' and $userfirstnameErr === '' and $userphoneErr === ''
                and $usermailErr === '' and $userobjectErr === '') {
                 echo '<script type="text/javascript">
                    alert("Votre message à bien été envoyé.");
    </script>';
            }

                

        }

        return $this->twig->render('ContactForm/contactform.html.twig', ['usernameErr' => $usernameErr,
            'userfirstnameErr' => $userfirstnameErr, 'userphoneErr' => $userphoneErr, 'usermailErr' => $usermailErr,
            'userobjectErr' => $userobjectErr,]);
    }


    public function testInput($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
}
