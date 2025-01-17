<?php

$num1 = 20;
$op = '/';
$num2 = 10;

// Fonction calcul() qui calcule uniquement les nombres entiers
function calcul($number1, $operator, $number2){
    switch($operator){
        case('+'):
            return $number1 + $number2;
        case('*'):
            return $number1 * $number2;
        case('-'):
            return $number1 - $number2;
        case('/'):
            if($number2 != 0){
                return $number1 / $number2;
            }else{
                return "La division par 0 est impossible";
            }
    }   
}

echo calcul($num1, $op, $num2);

?>