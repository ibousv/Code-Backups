<?php

$Personne = array(
    "Fall" =>
        array(
            "prenom" => "ibrahima ",
            "ville" => "Pikine ",
            "age" => "21 ans "
        ),
    "Seck" =>
        array(
            "prenom" => "Babacar",
            "ville" => "Tamba",
            "age" => "34"
        ),

);


foreach ($Personne as $clePersonne => $value) {
    echo " <strong style='color:red' ;>$clePersonne" . "<br>";
    foreach ($value as $key => $sou_valeur) {
        echo " <strong style='color:black' ;>$key" . " = " . $sou_valeur . "<br>";
    }
    echo "<br>";
}