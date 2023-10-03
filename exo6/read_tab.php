<?php
function factorielle($valeur)
{
    $result = 1;
    for($i=1;$i<=$valeur;$i++)
    {
        $result = $result * $i;
    }
    return $result;
}

function somme($valeur)
{
    $result = 0;
    for($i=1;$i<=$valeur;$i++)
    {
        $result = $result + $i;
    }
    return $result;
}
?>