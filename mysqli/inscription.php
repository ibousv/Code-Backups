<?php
session_start();
include 'fonction.php';

if (isset($_POST["inscrire"])) {
    extract($_POST);
    s_inscrire($prenom, $nom, $adresse, $telephone, $email, $profil, $login, $motPasse);
} else if (isset($_POST["connexion"])) {
    extract($_POST);
    se_connecter($login);

}
