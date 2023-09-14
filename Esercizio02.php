<?php

// Esercizio 1

$numeriScelta = [85,4,16,84,1,68,41,89,6,43,86];
$numeriGiusti = 0;
$somma = 0;
$media = 0;


foreach($numeriScelta as $multipli){
    if($multipli % 3 == 0){
    $somma += $multipli;
    $numeriGiusti++;
    $media = $somma / $numeriGiusti;
    }
};

echo"la media risulta $media";

// Esercizio 2

