<?php
$str = "Dans l'espace, personne ne vous entend crier";
$caractere = 0;

// Boucle for de 0 - longueur de $str qui compte que les carractères
for($ligne = 0; $ligne < strlen($str); $ligne++){
    if($str[$ligne] != ' '){
        $caractere++;
    }
}

echo "Il y'a " . $caractere . " caractère dans la string"
?>