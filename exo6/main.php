<?php
include ('read_tab.php');


if (isset($_GET["choix"]) && isset($_GET["choix"])) {
    $choix = $_GET["choix"];
    $nombre = $_GET["chiffre"];

    echo $choix;
    echo '<br>';
    if ($choix = "Factorielle")
    {
        $resultat = factorielle($nombre);
    }
    else if($choix = "Somme")
    {
        $resultat = somme($nombre);
    }
    echo $resultat;
}



?>;