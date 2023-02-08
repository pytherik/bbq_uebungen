<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="public/css/style.css">
  <link rel="icon" href="public/images/icons/favicon.ico">
  <title>Pampel-Komplex</title>
</head>
  <body>
    <div class="page-container">
      <div class="header">
        <a href="./index.php">Zurück</a>
        <h1>Das komplexe Rätsel</h1>
      </div>
      
      <?php

          // include_once('./make_your_choice.php');
          // if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            if (isset($_GET['choice'])) {
              $choice = $_GET['choice'];
              switch ($choice) {
                case 'raetsel1':
                  include_once('./raetsel1.php');
                  break;
                case 'raetsel2':
                  include_once('./raetsel2.php');
                  break;
                case 'raetsel3':
                  include_once('./raetsel3.php');
                  break;
                default:
                  echo "<h1>NOPE</h1";

              } 
              unset($_SERVER['REQUEST_METHOD']);
            }
          // }

        if (isset($_SERVER['REQUEST_METHOD'])) {
          unset($_SERVER['REQUEST_METHOD']);
          include_once('./make_your_choice.php');
        }
      ?>
    </div>
  </body>
</html>