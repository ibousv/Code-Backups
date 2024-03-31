<?php

# Script contenat toutes les fonctions 

function init_connection()
{ // permet d'établir une connexion

    $host = 'localhost';  // adresse du serveur
    $user = 'root';       // nom d'utilisateur
    $passwd = '';         // mot de passe
    $db = 'gestionEtudiant';   // nom de la base de donnée

    $connection = mysqli_connect($host, $user, $passwd, $db);

    /*  if ($connection) {
         echo "La connexion est établie avec succés";
     } else {
         echo "Une erreur est survenue lors de la connexion";
     } */
    return $connection;
}

function s_inscrire($prenom, $nom, $adresse, $telephone, $email, $profil, $login, $motPasse)
{
    $connection = init_connection();

    $ver = "select count(login) from compte where login='" . $login . "'";

    if ($result = mysqli_query($connection, $ver)) {
        while ($row = mysqli_fetch_row($result)) {
            $nb = $row[0];
            if ($nb == 1) {
                echo "<script>alert('Ce compte existe déjà. Veuillez vous connecter')</script>";
            } else {
                $sql = "insert into etudiant(prenom,nom,adresse,telephone,email,profil)
                         values
                        ('" . $prenom . "','" . $nom . "','" . $adresse . "'," . $telephone . ",'" . $email . "','" . $profil . "')";
                if (mysqli_query($connection, $sql) === true) {
                    $sql = "insert into compte(login,motPasse)
                            values
                            ('" . $login . "','" . $motPasse . "')";
                    mysqli_query($connection, $sql);
                    echo "<script>alert('Votre inscription a été enregistrée')</script>";
                }
            }
        }
    }
}


function se_connecter($login)
{
    $connection = init_connection();
    $sql = "select count(login) from compte where login='" . $login . "'";
    if ($result = mysqli_query($connection, $sql)) {
        while ($row = mysqli_fetch_row($result)) {
            $nb = $row[0];
            if ($nb == 1) {
                header("location:connect.php");
            } else {
                echo "<script>alert('Ce compte n'existe pas. Veuillez vous inscrire')</script>";
            }
        }
    }
}

function editer($nouveau, $login)
{ // permet d'effectuer des modifications
    $connection = init_connection();
    $sql = "update compte set motPasse = '" . $nouveau . "' where login = '" . $login . "'";
    if (mysqli_query($connection, $sql) === true) {
        echo "<script>alert('Votre mot de passe a été changé avec succées')</script>";
    } else {
        echo "<script>alert('Une erreur est survenue lors du changement')</script>";
    }
}


function supprimer($id)
{ // permet de supprimer un étudiant dans la liste
    $connection = init_connection();
    $sql = "delete from etudiant where idEtudiant = " . $id;
    if (mysqli_query($connection, $sql) === true) {
        echo "<script>alert('L'etudiant a été supprimer avec succée";
        header("location:formulaire.php");
    } else {
        echo "<script>alert('Une erreur est survenue lors du changement')</script>";
    }
}


function afficher_liste()
{
    $connection = init_connection();
    $sql = "select * from etudiant";
    $result = mysqli_query($connection, $sql);

    $num = mysqli_num_rows($result);

    if ($num > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo $row['idEtudiant'] . " " . $row['prenom'] . " " . $row['nom'] . " " . $row['adresse'] . " " . $row['telephone'] . " " . $row['email'] . " "
                . $row['profil'] . " " . $row['login'] . " " . $row['motPasse'] . "<br>";
        }
    }
}


function se_deconnecter()
{
    session_destroy();
    header("location:formulaire.php");
}