<?php
//ESERCIZIO 1

$integer = 10;
$float = 5.5;
$string = "ciao";
$boolean = true;

var_dump($integer,$float,$string,$boolean);


define('integer', 10);
define('float', 5.5);
define('string', "ciao");
define('boolean', true);

//ESERCIZIO 2


$text = "Marco "; 
$text2 = "hai "; 
$text3 = "sete "; 
$text4 = "? "; 
$text5 = "Perchè "; 
$text6 = $text2; 
$text7 = "bevuto "; 
$text8 = "tutto ";
$testo = $text . $text2 . $text3 . $text4 . $text5 . $text6 . $text7 . $text8;

var_dump($testo);

//ESERCIZIO 3


$words1 = [ 
    'una', 
    67, 
    'vita', 
    'colle',
    'mi', 
    'rosso', 
    [ 
      'oscura', 
      'era', 
      89, 
      [ 
        'mezzo',
        [ 
          'cammin', 
          'Nel', 
          [ 
            'selva', 
            'la', 
            [ 
              'via', 
              'una', 
              true, 
            ] 
          ], 
        ] 
      ], 
    'ritrovai', 
    'per' 
    ], 
    'diritta' 
  ]; 
  $words2 = [ 
    'elemento1' => 25.89, 
    'elemento2' => 'nostra', 
    'elemento3' => [ 
                      'Virgilio', 
                      'smarrita', 
                      'ché' 
                    ] 
  ];

  $mancano1 = "di";
  $mancano2 = "del";
/*
  $result = [$words1[6][3][1][1]],[$words1[6][3][0]];
   */

  var_dump($words1);