<div class="container">
  <div class="small-container">
    <div class="form-container">
      <h2>Passworteingabe</h2>
      <p>dein Passwort muss mindestens 8 Zeichen lang sein, mindestens ein Sonderzeichen, eine Zahl und einen Großbuchstaben enthalten.</p>
      <form method="POST">
        <div class="check-input">
          <input type="text" name="word" placeholder="Passwort" required autocomplete="off" autofocus>
        </div>
        <div class="check-input">
          <button id="pwbutton" type="submit">so isses</button>
        </div>
      </form>
    </div>
    <div class="header">
      <?php
      $answers_file = './answers.txt';
      if(!(is_file($answers_file))) {
        fopen($answers_file, 'w');
        file_get_contents($answers_file);
      }
      $answers = fopen($answers_file, 'a');

      //: Eingabe wurde abgeschickt
      if (isset($_POST['word'])) {         
        //: regex patterns                         
                                                    //   ein Pattern steht in 'Singlequotes'
                                                    //   zwischen zwei / - Zeichen
        $hasCapital = '/^.*[A-Z].*$/';              //   . steht für jedes beliebige Zeichen, 
                                                    //   * für 0 - beliebig viele vorangestellte Ausdrücke, 
                                                    //   [A-Z] für Großbuchstaben 
        $hasCorrectLength = '/^.{8,12}$/';          //   ^ für Anfang der Zeile, $ für Ende d. Z.
                                                    //   {8,12} für 8-12 Wiederholungen von vorangest. Ausdr. 
        $containsNumber = '/^.*[0-9].*$/';          //   [0-9] für Zahlen
                                                    //   [^irgendwas] für nicht irgendwas
        $hasSpecialChar = '/^.*[^A-Za-z0-9\s].*$/'; 

        $word = $_POST['word'];

        function game_over ($answers_file) {
          $wrongCount = count(file($answers_file));
          if ($wrongCount > 2) {
            echo "<h2>zu viele falsche Antworten</h2>";
            unlink($answers_file);
            include('./game_over.php');
          }
        }

        //: Vergleich der patterns mit Eingabe
        if (preg_match($hasCapital, $word) == 0) {
          fwrite($answers, "falsch\n");
          game_over ($answers_file);
          echo "<h3>Großbuchstabe fehlt!</h3>";
        } else if (preg_match($hasCorrectLength, $word) == 0) {
          fwrite($answers, "falsch\n");
          game_over ($answers_file);
          echo "<h3>bitte 8-12 Buchstaben!</h3>";
        } else if (preg_match($containsNumber, $word) == 0) {
          fwrite($answers, "falsch\n");
          game_over ($answers_file);
          echo "<h3>Keine Zahl drin!</h3>";
        } else if (preg_match($hasSpecialChar, $word) == 0) {
          fwrite($answers, "falsch\n");
          game_over ($answers_file);
          echo "<h3>Kein Sonderzeichen drin!</h3>";
        } else {
          unlink($answers_file);
          echo "<h3>Passwort okay!</h3>";
        }
      }
      ?>
    </div>
  </div>
</div>