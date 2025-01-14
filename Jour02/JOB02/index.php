<?php
$number = ['26','37','88','1111'];

for($ligne = 0; $ligne < 1338; $ligne++){
    if(in_array($ligne, $number)){
        echo '<br>';
    }else{
        echo $ligne . '<br>';  
    } 
}
?>