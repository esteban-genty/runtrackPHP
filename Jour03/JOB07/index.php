<?php
$str = "Certaines choses changent, et d'autres ne changeront jamais.";
$newStr = "";

//Boucle for de 1 - longueur de $str qui échange les carractère de un vers la gauche
for($i = 1; $i < strlen($str); $i++){
    if($str[$i] != ' '){
        $newStr .= $str[$i];
    }
}
//Ajout du premier carractère à la fin
$newStr .= $str[0];

echo $newStr;

?>