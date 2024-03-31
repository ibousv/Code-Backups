<?php

# Script contenat toutes les fonctions 

function se_connecter()
{ // permet d'établir une connexion

    $host = 'localhost';  // adresse du serveur
    $user = 'root';       // nom d'utilisateur
    $passwd = '';         // mot de passe
    $db = 'php_mysqli';   // nom de la base de donnée

    $connection = mysqli_connect($host, $user, $passwd, $db);

    if ($connection) {
        echo "La connexion est établie avec succés";
    } else {
        echo "Une erreur est survenue lors de la connexion";
    }
}


function s_inscrire($prenom, $nom, $adresse, $telephone, $email, $profil, $login, $motPass)
{ // permet d'inscrire un étudiant sur la liste
    $host = 'localhost';
    $user = 'root';
    $passwd = '';
    $db = 'php_mysqli';
    $connection = mysqli_connect($host, $user, $passwd, $db);

    $ver = "select count(login) from compte where login='" . $login . "'";

    if ($result = mysqli_query($connection, $ver)) {
        while ($row = mysqli_fetch_row($result)) {
            $nb = $row[0];
            if ($nb == 1) {
                header("location:inscription.php?msg=Ce compte existe déjà. Veuillez vous connecter");
            } else {
                $sql = "insert into etudiant(prenom,nom,adresse,telephone,email,profil)
                         values
                        ('" . $prenom . "','" . $nom . "','" . $adresse . "'," . $telephone . ",'" . $email . "','" . $profil . "')";
                if (mysqli_query($connection, $sql) === true) {
                    echo "Votre inscription a été enregistrée";
                }
            }
        }
    }

}


$editer = function () { // permet d'effectuer des modifications

};

$supprimer = function () { // permet de supprimer un étudiant dans la liste

};

$s_authentifier = function () { // permet d'authentifier l'utilisateur

};

