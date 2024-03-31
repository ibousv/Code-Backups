<?php
session_start();
# Pour empecher à l'utilisateur d'accéder à cette page si la session
# login n'exite pas

if (!isset ($_SESSION["log"])) {
    header("location:../index.php?msg=Veuillez vous authentifiez");
} else {
    echo "<div>" . $_SESSION["log"] . "Binenvenue dans votre espace";
    echo "<a href='../deconnexion.php'>Se Déconnecter</a>";
    echo "</div>";
}
