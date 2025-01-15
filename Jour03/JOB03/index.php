<?php
$str = "I'm sorry Dave I'm afraid I can't do that.";
$voyelle = ['a','e','i','o','u','y'];


    //Boucle for de 0 à longeur de $str avec une condition qui détecte les 'I' et les remplace par des 'i'
    for($ligne = 0; $ligne < strlen($str); $ligne++){
        if($str[$ligne] == 'I'){
            $str[$ligne] = 'i';
        }//Boucle for pour comparer chaque voyelle avec le carractère de $str
        for($i = 0; $i < count($voyelle); $i++){
            if($str[$ligne] == $voyelle[$i]){
                echo $str[$ligne];
            }
        }
    }
?>