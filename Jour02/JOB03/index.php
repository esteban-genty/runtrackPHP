<?php
for($ligne =0; $ligne < 101; $ligne++){
    if($ligne >= 0 && $ligne <= 20){
        echo '<B>' . $ligne . '</B><br>';
    }elseif($ligne == 42){
        echo 'La Plateforme_<br>';
    }elseif($ligne >=25 && $ligne <=50){
        echo '<u>' . $ligne . '</u><br>';
    }else{
        echo $ligne . '<br>';
    }
}
?>