<?php

if (isset ($_POST["connecter"])) {
    extract($_POST);
    session_start();
    $_SESSION["log"] = $login;
    if ($login == "admin" && $mdp == "admin") {
        header("location:admin/espace.php");
    } else if ($login == "secretaire" && $mdp == "secretaire") {
        header("location:secretaire/espace.php");
    } else {
        header("location:index.php?msg=Ce Compte n'existe pas");
    }

}

if ($x > $y) {
    echo "<div>
                <script>
                 alert('Erreur veuillez réessayer')
                </script>
            </div>";
} elseif ($_POST["check"] == "Addition") {
    echo "Le résultat est :" . addition($x, $y);
} elseif ($_POST["check"] == "Soustraction") {
    echo "Le résultat est :" . soustraction($x, $y);
} elseif ($_POST["check"] == "Multiplication") {
    echo "Le résultat est :" . multiplication($x, $y);
} elseif ($_POST["check"] == "Division") {
    echo "Le résultat est :" . div($x, $y);
}