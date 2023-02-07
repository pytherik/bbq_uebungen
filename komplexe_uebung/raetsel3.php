<div class="container">
  <div class="green-container">
    <div class="form-container">
        <h2>Passworteingabe</h2>
        <p>dein Passwort muss mindestens 8 Zeichen lang sein, mindestens ein Sonderzeichen, eine Zahl und einen Großbuchstaben enthalten.</p>
        <form method="POST">
          <div class="check-input">
            <input type="text" name="word" placeholder="Passwort" required autocomplete="off" autofocus>      
          </div>
          <div class="check-input">
            <button id="pwbutton" type="submit">Ich glaub so gehts!</button>
          </div>
        </form>
    </div>
    <div>
<?php

    if (isset($_POST['word'])) {
      //: regex patterns
      $startsWithCapital = '/.*[A-Z].*/';
      $hasCorrectLength = '/^.{8,12}$/';
      $containsNumber = '/^.*[0-9].*$/';
      $hasSpecialChar = '/^.*[^A-Za-z0-9\s].*$/';
      
      $word = $_POST['word'];
      
      if (preg_match($startsWithCapital, $word) == 0) {
        echo "<h3>Großbuchstabe fehlt!</h3>";
      } else if (preg_match($hasCorrectLength, $word) == 0) {
        echo "<h3>bitte 8-12 Buchstaben!</h3>";
      } else if (preg_match($containsNumber, $word) == 0) {
        echo "<h3>Keine Zahl drin!</h3>";
      } else if (preg_match($hasSpecialChar, $word) == 0) {
        echo "<h3>Kein Sonderzeichen drin!</h3>";
      } else {
        echo "<h3>Passwort okay!</h3>";
      }
    }
?> 
    </div>
  </div>
</div>