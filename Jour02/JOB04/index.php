<?php
    for($ligne = 1; $ligne < 101; $ligne++){
        if($ligne % 3 == 0 && $ligne % 5 == 0){
            echo'FizzBuzz <br>';
        }elseif($ligne %3 == 0){
            echo 'Fizz <br>';
        }elseif($ligne %5 == 0){
            echo 'Buzz <br>';
        }
        else{
        echo $ligne . '<br>';    
    }
}
?>