<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php

$a = 6;
$b = 4;
$c = 6 / 4;
echo "$c<br>";
settype($c, "int");
echo "$c<br>";
$d = $a % $b;
echo $a % $b."<br>";
echo $d;







// //: Wertzuweisungen für $a, $b und $c
  // $a = 10;
  // $b = '10';
  // $c = 10;
  
  // echo '$a = 10;<br>';
  // echo '$b = "10";<br>';
  // echo '$c = 10;<br>';

  // //: prüfen auf Wert und Datentyp
  // if ($a === $b) {
  //   echo '$a und $b sind identisch in Wert und Typ<br>';
  // } else {   
  //   echo '$a und $b sind nicht identisch in Wert und Typ<br>';
  // }
  // if ($a === $c) {
  //   echo '$a und $c sind identisch in Wert und Typ<br>';
  // } else {   
  //   echo '$a und $c sind nicht identisch in Wert und Typ<br>';
  // }
  // //: prüfen auf Wert
  // if ($a == $b) {
  //   echo '$a und $b sind identisch in Wert<br>';
  // } else {   
  //   echo '$a und $b sind nicht identisch in Wert<br>';
  // }
  // if ($a == $c) {
  //   echo '$a und $c sind identisch in Wert<br>';
  // } else {   
  //   echo '$a und $c sind nicht identisch in Wert<br>';
  // }




  // echo 'gettype($a) ';
  // echo " = ".gettype($a)."<br>";

  // $b = 6 % 4;

  // echo $b
//  $a = 12; $b = 222;
  //   echo "a ist $a";
  //   define('KONST', 42); //: and constants
  //   echo $a + $b . (htmlentities("<br>"))."<br>"; //: display html tags as string  
  //   echo $a + $b . "&ltbr&gt<br>";
  //   $c = plus($a, $b);
  //   echo "Das Ergebnis lautet: $c<br>";
  //   echo "Es is die Konstante: ".KONST."<br>";
  //   function plus($a, $b) {
  //     return $a + $b;
  //   }
    // var_dump ($_SERVER);
  ?>
</body>
</html>