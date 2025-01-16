<?php

$numArgument = 0;

// Boucle qui parcours le tableau $_GET avec une condition qui vérifie si la valeur est vide
foreach($_GET as $champ => $value){
    if(!empty($value)){
        $numArgument++;
    }
}

echo "Il y'a " . $numArgument . "   argument(s)";

?>

<form action="" method="get" class="form-example">

        <label for="name">Nom : </label>
        <input type="text" name="name" id="name"/>

        <label for="email">Email : </label>
        <input type="email" name="email" id="email" />

        <input type="submit" value="Envoyer" />
</form>
