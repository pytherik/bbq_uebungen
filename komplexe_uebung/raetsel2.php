  <div class="green-container">
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
    if (count($_POST) == 2){
      if (isset($_POST['y']) && (isset($_POST['b']))) {
        echo "<h1>Richtig</h1>";
      } else {
        echo "<h1>Falsch</h1>";
      } 
    } else {
      echo "<h3>bitte 2 Farben wählen!</h3>";
    }

    ?>
    </div>
  </div>
