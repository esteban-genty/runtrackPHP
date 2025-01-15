<?php
    $str = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.";

    //Boucle for de 0 à la longeur de $str qui passe de 2 en 2 pour afficher un carractère sur 2
    for($ligne = 0; $ligne < strlen($str); $ligne += 2){
        if($str[$ligne] == ' '){
            $ligne -= 1;
        }else{
            echo $str[$ligne];
        }
    }
?>