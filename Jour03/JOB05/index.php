<?php
$str = "On n est pas le meilleur quand on le croit mais quand on le sait";
$voyelle = ['a','e','i','o','u','y'];
$numVoyelle = 0;
$numConsonne = 0;

$dic = [
    [
        'consonnes' => ""
    ],
    [
        'voyelles' => ""
    ]
];

// Boucle for de 0 - longueur $str pour séparé les voyelles des consonnes avec in_array
for($ligne = 0; $ligne < strlen($str); $ligne++){
        if($str[$ligne] == 'O'){
            $str[$ligne] = 'o';
        }
        elseif(in_array($str[$ligne], $voyelle)){
            $dic[1]['voyelles'] .= $str[$ligne];
            $numVoyelle++;
        }
        else{
            $dic[0]['consonnes'] .= $str[$ligne];
            $numConsonne++;
        }
}

//Affichage des voyelles / consonnes
echo "Il y'a " . $numConsonne . " consonnes et " . $numVoyelle . " voyelles. <br/>";
echo "Consonnes : " . $dic[0]['consonnes'] . "<br/>";
echo "Voyelles : " . $dic[1]['voyelles'];

?>