<?php
session_start();
$_SESSION["etudiantBoursier"] = "Boursier";
$_SESSION["etudiantNonBoursier"] = "NonBoursier";
?>

<form method="POST" action="connect.php">
    <table>
        <tr>
            <td><input type="text" name="prenom" placeholder="Votre prenom" required /></td>
            <td><input type="text" name="nom" placeholder="Votre nom" required /></td>
        </tr>
        <tr>
            <td><input type="text" name="adresse" placeholder="Votre adresse" required /></td>
            <td><input type="tel" name="telephone" placeholder="Votre telephone" maxlength="9" required /></td>
        </tr>
        <tr>
            <td><input type="email" name="email" placeholder="Votre email" required /></td>
            <td><input type="text" name="login" placeholder="Votre login" required /></td>
        </tr>
        <tr>
            <td><input type="password" name="motPasse" placeholder="Votre mot d passe" required /></td>
            <td><input type="password" name="confPasse" placeholder="Confirmer mot de passe" required /></td>
        </tr>
        <tr>
            <td>
                <select name="profil">
                    <option value="etudiantBoursier">Etudiant Boursier</option>
                    <option value="etudiantNonBoursier">Etudiant non Boursier</option>
                </select>
            </td>
            <td>
                <input type="submit" name="inscrire" value="Inscription" />
                <input type="submit" name="connexion" value="Se connecter" />

            </td>
        </tr>
    </table>
</form>
<?php
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

?>