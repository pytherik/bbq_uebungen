<div class="container">
<table>
<caption>
  <h1>Bilder Quiz</h1>
</caption>
<tr>
  <!-- row for images -->
  <td>
    <img class='pic' src='public/images/quest03.png' alt='pic 1'>
    <img class='pic' src='public/images/quest02.png' alt='pic 2'>
    <img class='pic' src='public/images/quest01.png' alt='pic 3'>
  </td>
</tr>
<tr>
  <td>
    <p>Such dir die schönste Antwort aus:</p>
    <hr>
  </td>
</tr>
<tr>
  <form method='POST'>

<?php

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
          <label>$key</label>
            <input type='radio' name=$name value=$value> 
           
        </td>
      </tr>";
    }
?>

<tr>
  <td>
    <button  type='submit'>antworten</button>
  </td>
</tr>
<tr>
  <td>

<?php
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
?>

  </td>
</tr>
</form>
</table>
</div>
