<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="" method="GET" class="form-maison">
        <h1>Veuillez saisir : une largeur 2 fois plus grande que la hauteur</h1>
        <label for="height">Entrée une hauteur : </label>
        <input type="text" name="height" id="height"/>

        <label for="width">Entrée une largeur : </label>
        <input type="text" name="width" id="width"/>
        
        <input type="submit" value="Envoyer" />
    </form>

    <?php
        if (isset($_GET['height']) && isset($_GET['width'])) {
            $height = intval($_GET['height']);
            $width = intval($_GET['width']);
            if($width != 2*$height){
                echo "Veuillez saisir : une largeur 2 fois plus grande que la hauteur";
            }else{        
                
                //Boucle de 0 - 5 pour la hauteur du toît
                for($i = 0; $i < $height; $i++) {
                    // Boucle de 4 - 0 pour l'espacement à gauche
                    for($j = 0; $j < $height - $i - 1; $j++) {
                        echo "&nbsp;&nbsp;";
                    }
                    
                    echo "/";
                    // Boucle de 0 - 8 qui affiche les underscores entre les /\
                    for($j = 0; $j < $i * 2; $j++) {
                        echo "_";
                    }
                    
                    echo "\\";
                    echo "<br />";
                }

                //Boucle de 0 - hauteur
                for ($i = 0; $i < $height; $i++) {
                    echo "|";
                    // Boucle de 0 - largeur
                    for ($j = 0; $j < $width-1; $j++) {
                        echo "&nbsp;&nbsp;";
                    }
                    echo "|<br>";
                }

                echo "|";
                // Boucle de 0 - largeur
                for ($i = 0; $i < $width-1; $i++) {
                    echo "_";
                }
                echo "|<br>";
                }
        }
    ?>
    
</body>
</html>