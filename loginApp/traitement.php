<?php

if (isset ($_POST["connecter"])) {
    extract($_POST);
    session_start();
    $_SESSION["log"]= $login;
    if ($login == "admin" && $mdp == "admin") {
        header("location:admin/espace.php");
    }

    else if ($login == "secretaire" && $mdp == "secretaire") {
        header("location:secretaire/espace.php");
    }
    else{
        header("location:index.php?msg=Ce Compte n'existe pas");
    }

}