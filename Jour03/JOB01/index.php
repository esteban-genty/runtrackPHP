<?php
$number = [200, 204, 173, 98, 171, 404, 459];


// Boucle for de 0 - 7 si modulo de 2 alors pair
for($ligne = 0; $ligne < 7; $ligne++){
    if($number[$ligne] % 2 == 0){
        echo $number[$ligne] . ' est paire <br/>';
    }else{
        echo $number[$ligne] . ' est impaire <br/>';
    }
}
?>