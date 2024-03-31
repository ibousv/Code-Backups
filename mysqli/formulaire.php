<?php
session_start();
$_SESSION["etudiant"] = "etudiant";
?>

<form method="POST" action="inscription.php">
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
                    <option value="etudiant boursier">Etudiant Boursier</option>
                    <option value="etudiant non boursier">Etudiant non Boursier</option>
                </select>
            </td>
            <td>
                <input type="submit" name="inscrire" value="Inscription" />
                <input type="submit" name="connexion" value="Se connecter" />
            </td>
        </tr>
    </table>
</form>
