<?php

$jour = true;


// Fonction qui affiche 'Bonjour' si $jour = true sinon 'Bonsoir'
function bonjour($journee): string
{
    if($journee){
        $printBonjour = "Bonjour";
        return $printBonjour;
    }else{
        $printBonsoir = "Bonsoir";
        return $printBonsoir;
    }
}

echo bonjour($jour)

?>