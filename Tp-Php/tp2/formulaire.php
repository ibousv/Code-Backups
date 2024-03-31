<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>

<body>

    <form action="traitement.php" method="post">
        <input type="text" name="number1" required><br><br>
        <input type="text" name="number2" required><br><br>
        <input type="radio" name="check" value="Addition" checked>Addition
        <input type="radio" name="check" value="Soustraction">Soustraction
        <input type="radio" name="check" value="Multiplication">Multiplication
        <input type="radio" name="check" value="Division">Division
        <input type="submit" name="soumettre" value="soumettre">
    </form>
    <?php
    // inclure la page traitement dans le formulaire
/*     include("traitement.php");
    $x = $_POST["number1"];
    $y = $_POST["number2"];

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
    }*/

    //vérification de la clé
/*     if (isset($_GET["msg"])) {
        echo "" . $_GET["msg"] . "";
    } */

    if (isset($_POST["soumettre"])) {
        $n1 = $_POST["number1"];
        $n2 = $_POST["number2"];
        $op = $_POST["check"];
        if (is_numeric($n1) && is_numeric($n2)) {
            echo "bon";

        } else {
            header("location:formulaire.php?msg=Veuillez saisir des nombres");
        }
    }
    ?>

</body>

</html>