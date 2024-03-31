<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LoginPage</title>
    <link rel="stylesheet" href="css/main.css">
</head>

<body>
    <?php
    echo "<div id='msg_dec'>";
    if (isset ($_GET["dec"])) {
        echo ucfirst($_GET["dec"]);
    }
    echo "</div>";

    ?>
    <form action="traitement.php" method="post">
        <div class="input">
            Login
            <input class="zone" type="text" name="login" placeholder="entrez votre login" required>
        </div>
        <div>
            Mot de passe
            <input class="zone" type="password" name="mdp" placeholder="entrez votre mot de passe" required>
        </div>
        <div>
            Connecter
            <input class="bouton" type="submit" name="connecter" value="Connexion">
        </div>
    </form>

    <?php


    ?>
</body>

</html>