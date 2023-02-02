 <!DOCTYPE html>
 <html>

 <head>
   <title>Rebus</title>
   <link rel="stylesheet" href="public/css/style.css">
 </head>

 <body>
   <div class="container">
     <table>
       <caption>
         <h1>Bilder Quiz</h1>
       </caption>
       <tr>
         <td>
           <img src="public/images/quest03.png" alt="Bilderrätsel 1" width="150">
           <img src="public/images/quest02.png" alt="Bilderrätsel 2" width="150">
           <img src="public/images/quest05.png" alt="Bilderrätsel 3" width="150">
         </td>
       </tr>
       <tr>
         <td>
           <p>Such dir die schönste Antwort aus:</p>
           <hr>
         </td>
       </tr>
       <tr>
         <form method="POST">
           <?php
            $antworten = array(
              ' Antwörd 1' => 'falsch',
              ' Antwort 2' => 'richtig',
              ' Antword 3' => 'falsch',
              ' AntwÖrt 4' => 'falsch'
            );

            $name = 'antwort_gruppe';

            foreach ($antworten as $key => $value) {
              echo "<tr><td><label>
                    <input type='radio' name='antwort_gruppe' value=$value>$key 
                  </label> 
          </td></tr>";
            }
            ?>
       <tr>
         <td>
           <input type="submit" value="antworten">
         </td>
       </tr>
       <tr>
         <td>
           <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
              if (!array_key_exists('antwort_gruppe', $_POST)) {
                echo "Du musst etwas auswählen!";
              } else {
                $inhalt = $_POST['antwort_gruppe'];
                echo "<h1>$inhalt !!!!!</h1>";
              }
            }
            ?>
         </td>
       </tr>
       </form>

     </table>
   </div>
 </body>

 </html>