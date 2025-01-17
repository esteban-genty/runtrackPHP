<?php

$str = "Bonsoir Paris";
$char = "r";

// Fonction qui boucle sur la chaîne de caractères pour la comparer avec un caractère
function occurrences($string, $character): int
{
    $i = 0;
    $numberChar = 0;
    while($i < strlen($string)){
        if($string[$i] == $character){
            $numberChar++;
        }
        $i++;
    }
    return $numberChar;
}

echo occurrences($str, $char)


?>