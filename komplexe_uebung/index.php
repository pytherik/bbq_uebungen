<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="public/css/style.css">
  <title>komplexe_uebung</title>
</head>
  <body>
    <div class="page-container">
      <?php

          // include_once('./make_your_choice.php');
          // if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            if (isset($_GET['choice'])) {
              $choice = $_GET['choice'];
              switch ($choice) {
                case 'raetsel1':
                  echo "
                  <table>
                    <caption>
                      <h1>Bilder Quiz</h1>
                    </caption>
                    <tr>
                      <!-- row for images -->
                      <td>
                        <img src='public/images/quest03.png' alt='pic 1' width='150'>
                        <img src='public/images/quest02.png' alt='pic 2' width='150'>
                        <img src='public/images/quest01.png' alt='pic 3' width='150'>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <p>Such dir die schönste Antwort aus:</p>
                        <hr>
                      </td>
                    </tr>
                    <tr>
                      <form method='POST'>";
                        //:  array all answers and solutions
                        $antworten = array(
                          ' Antwörd 1' => 'falsch',
                          ' Antwort 2' => 'richtig',
                          ' Antword 3' => 'falsch',
                          ' AntwÖrt 4' => 'falsch'
                        );
                        //: name variable for data-transfer in $_POST  
                        $name = 'antwort_gruppe';
                        //: create html table rows for answers
                        foreach ($antworten as $key => $value) {
                          echo "
                          <tr>
                            <td>
                              <label>
                                <input type='radio' name=$name value=$value>$key 
                              </label> 
                            </td>
                          </tr>";
                        }
                    echo "
                    <tr>
                      <td>
                        <input type='submit' value='antworten'>
                      </td>
                    </tr>
                    <tr>
                      <td>";
                        //: evaluation if and what data is sent by POST
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                          if (!array_key_exists('antwort_gruppe', $_POST)) {
                            echo "<h2>Du musst etwas auswählen!</h2>";
                          } else {
                            $inhalt = $_POST['antwort_gruppe'];
                            if ($inhalt == 'falsch') {
                              echo "<h2>$inhalt 🤮 😡 🥴</h2>";
                            } else
                              echo "<h2>$inhalt 🍬 🍺 🍰</h2>";
                          }
                        }
                        echo "
                      </td>
                    </tr>
                    </form>
                  </table>
                ";    
                break;
                case 'raetsel2':
                  echo "<h1>Rätsel 2</h1>";
                  echo "<input type='submit' value='raetsel1'>";
                  break;
                case 'raetsel3':
                  echo "<h1>Rätsel 3</h1>";
                  echo "<input type='submit' value='raetsel1'>";
                  break;
                default:
                  echo "<h1>NOPE</h1";

              } 
              unset($_SERVER['REQUEST_METHOD']);
            }
          // }

        if (isset($_SERVER['REQUEST_METHOD'])) {
          unset($_SERVER['REQUEST_METHOD']);
          echo "
          <form method='GET'>
            <div class='choices-container'>
              <div class='choice' id='choice1'>
                <div class='thumb'>
                  <img src='public/images/quest01.png' alt='pic1'>
                </div>
                <div>
                  <input type='submit' name='choice' value='raetsel1' id='btn1'>
                </div>
              </div>
              <div class='choice' id='choice2'>
                <div class='thumb'>
                  <img src='public/images/quest02.png' alt='pic2'>
                </div>
                <div>
                  <input type='submit' name='choice' value='raetsel2' id='btn2'>
                </div>
              </div>  
              <div class='choice' id='choice3'>
                <div class='thumb'>
                  <img src='public/images/quest03.png' alt='pic3'>
                </div>
                <div>
                  <input type='submit' name='choice' value='raetsel3' id='btn3'>
                </div>  
              </div>
            </div>
          </form>";
        }
  
      ?>
    </div>
  </body>
</html>