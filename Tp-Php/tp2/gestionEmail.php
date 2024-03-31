<?php

// Liste des email
$liste_email = array("abc@gmail.com", "abc@yahoo.com" );

// extraction des domaines
foreach ($liste_email as $key => $value) {
    $domaine[] = substr($value, strpos($value, "@") + 1);
}

// Test 
foreach ($domaine as $key => $value) {
    echo $value . " ";
}
