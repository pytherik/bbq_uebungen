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
    $a = 20;  //: declaration of variables
    $b = 22;
    define('KONST', 42); //: and constants
    echo $a + $b . (htmlentities("<br>"))."<br>"; //: display html tags as string  
    echo $a + $b . "&ltbr&gt<br>";
    $c = plus($a, $b);
    echo "Das Ergebnis lautet: $c<br>";
    echo "Es is die Konstante: ".KONST."<br>";
    function plus($a, $b) {
      return $a + $b;
    }
    var_dump ($_SERVER);
  ?>
</body>
</html>