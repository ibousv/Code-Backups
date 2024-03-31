<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page de Connexion</title>
</head>

<body>
    <div>
        <div>
            <div>
                <form method="post" action="">
                    <table>
                        <tr>
                            <td><input type="text" name="login" placeholder="Votre login " /></td>
                            <td><input type="password" name="motPasseN" placeholder="Votre nouveau passe" /></td>
                            <td><input name="mdp" type="submit" value="Changer votre mot de passe" /></td><br>
                        </tr>
                    </table>
            </div>
            <div>
                <table>
                    <tr><input type="number" name="id" value="Entrez l'id a Supprimer" /></tr>
                    <tr><input type="submit" name="delete" value="Supprimer mon compte" /></tr><br>
                    <tr><input type="submit" name="display" value="Afficher la liste" /></tr><br><br>
                    <tr><button><a href="formulaire.php" style="text-decoration: none;">Se déconnecter</a></button>
                    </tr><br><br>
                </table>
                </form>
            </div>
        </div>
    </div>
</body>
<?php
session_start();
require 'fonction.php';

if (isset($_POST["mdp"])) {
    extract($_POST);
    editer($motPasseN, $login);
} else if (isset($_POST["display"])) {
    extract($_POST);
    afficher_liste();
} else if (isset($_POST["delete"])) {
    extract($_POST);
    supprimer($_POST["id"]);
}
?>

</html>