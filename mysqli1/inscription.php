<?php

include 'fonction.php';

if (isset ($_POST["inscrire"])) {
    extract($_POST);
    $s_inscrire($prenom, $nom, $adresse, $telephone, $email, $profil, $login, $motPasse); 
    $se_connecter();
}

if (isset ($_REQUEST["connexion"])) {

}

$se_connecter();











