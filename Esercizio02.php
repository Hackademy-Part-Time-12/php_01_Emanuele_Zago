<?php
/*
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
*/
// Esercizio 2

/*
$users = [ 
    ['name' => 'Daniele', 'surname' => 'Insabato', 'gender' => 'NB'],
    ['name' => 'Franco', 'surname' => 'Gabibbo', 'gender' => 'M'],
    ['name' => 'Giulia', 'surname' => 'Trottola', 'gender' => 'F'],
    ['name' => 'Emanuele', 'surname' => 'Troia', 'gender' => 'F'],
  ];

  foreach($users as $utenti){
    if($utenti['gender'] == 'NB'){
    $utenti['gender'] =  null;
    echo"Buongiorno {$utenti['gender']} {$utenti['name']} {$utenti['surname']}\n";
    }
    else if ($utenti['gender'] == 'M'){
        $utenti['gender'] =  'Sig.';
        echo"Buongiorno {$utenti['gender']} {$utenti['name']} {$utenti['surname']}\n";
    }
    else if($utenti['gender'] == 'F'){
        $utenti['gender'] =  'Sig.ra';
        echo"Buongiorno {$utenti['gender']} {$utenti['name']} {$utenti['surname']}\n";
    }
  };
*/
  // Esercizio 3
/*
  $numeri = [1,2,3,4,5,6,7,8,9,10];

  for($i = 0; $lenght = count($numeri), $i < $lenght; $i++){
    echo"($numeri[$i])";
  };
*/

/*
$numeri = [1,2,3,4,5,6,7,8,9,10];
$i = 0; 
$lenght = count($numeri);

  while($i < $lenght){
    echo"$numeri[$i]\n";
    $i++;
  };
  */

  /*
  $numeri = [1,2,3,4,5,6,7,8,9,10];
  $lenght = count($numeri);

  $i = 0;
  do{
   echo"$numeri[$i]\n";
   $i++;
  }
  while($i < $lenght);
  */