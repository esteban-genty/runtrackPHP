<?php
function primeNumber($ligne): bool
{
    if($ligne <= 1){
        return false;
    }

    elseif($ligne == 2){
        return true;
    }

    elseif($ligne % 2 == 0){
        return false;
    }
    $squareRoot = floor(sqrt($ligne));
    for($i = 3; $i <= $squareRoot; $i+=2){
        if($ligne % $i == 0){
            return false;
        }
    }
    return true;
}

for($number = 0; $number < 1001; $number++){
    if(primeNumber($number)){
        echo $number . '<br>';
    }
}
?>