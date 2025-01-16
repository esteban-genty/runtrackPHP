<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    
    <form action="" method="GET" class="form-example">
        <label for="number">Nombre :</label>
        <input type="text" name="number" id="number"/>

        <input type="submit" value="Envoyer" />
    </form>

    <?php
    // Converti la string en nombre
    $getNumber = intval($_GET['number']);
    // Si modulo de 2 alors pair sinon impair
    if (isset($_GET['number'])){
        if($getNumber % 2 == 0){
            echo $getNumber . ' est un Nombre pair';
        }else{
            echo $getNumber . ' est un Nombre impair';
        }
    }
    ?>

    
</body>
</html>