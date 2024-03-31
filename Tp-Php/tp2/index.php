<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>

<body>
    <form action="recup.php" method="post">
        <p>Entrez votre login et votre mot de passe</p>
        <input type="text" name="login" required><br><br>
        <input type="password" name="password" required><br><br>
        <input type="submit" name="connexion" value="se connecter">
    </form>

    <?php

    $log = $_POST["login"];
    $mdp = $_POST["password"];
    if ($log == "admin" && $mdp == "admin") {
        header("location:recup.php");
    } else {
        echo "<script>alert('Login ou mot de passe incorrect')</script>";
    }
    ?>
</body>

</html>