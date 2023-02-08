  <div class="small-container">
    <div class="green-box">
    </div>
    <div class="form-container">
      <p>Welche Farben muss man mischen um Grün zu erhalten?</p>
      <form method="POST">
        <div class="check-input">
          <label for="r">Rot</label>
          <input id="r" type="checkbox" name="r">
        </div>
        <div class="check-input">
          <label for="g">Gelb</label>
          <input id="y" type="checkbox" name="y">
        </div>
        <div class="check-input">
          <label for="b">Blau</label>
          <input id="b" type="checkbox" name="b">
        </div>
        <div class="check-input">
          <button type="submit">so isses</button>
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
      
        function game_over ($answers_file) {
          $wrongCount = count(file($answers_file));
          if ($wrongCount > 3) {
            echo "<h2>zu viele falsche Antworten</h2>";
            unlink($answers_file);
            include('./game_over.php');
          }
        }
    
        //: Eingabe wurde abgeschickt
        if (count($_POST) == 2) {
          if (isset($_POST['y']) && (isset($_POST['b']))) {
            unlink($answers_file);
            echo "<h1>Richtig</h1>";
          } else {
            $wrongCount = count(file($answers_file));
            fwrite($answers, "falsch\n");
            echo "<h1>Falsch</h1>";        
            game_over($answers_file);
          }
        } else {
          echo "<h3>bitte 2 Farben wählen!</h3>";
          fwrite($answers, "falsch\n");
          game_over($answers_file);
        }

      ?>
    </div>
  </div>