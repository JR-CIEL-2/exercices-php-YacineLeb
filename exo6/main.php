<?php
include ('read_tab.php');


if (isset($_GET["choix"]) && isset($_GET["choix"])) {
    $calcul = $_GET["choix"];
    $nombre = $_GET["chiffre"];

    echo $calcul;
    echo '<br>';
    if ($calcul == 'Factorielle')
    {
        $resultat = factorielle($nombre);
    }
    else if($calcul == "Somme")
    {
        $resultat = somme($nombre);
    }
    echo $resultat;
}



?>;