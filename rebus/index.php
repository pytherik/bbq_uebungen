 <!DOCTYPE html> 
<html> 
  <head> 
    <title>Rebus</title> 
</head> 
<body> 
<table border="1px solid black" align="center"> 
  <caption> 
    <h1>Bilder Quiz</h1> 
  </caption> 
  <tr> 
    <td> 
      <img src="bilder/bilder_raetsel_1.png" alt="Bilderrätsel 1" width="400" height="250"> 
    </td> 
  </tr> 
  <tr>  
    <td> 
      <p>Such dir die schönste Antwort aus</p> 
    </td> 
  </tr> 
  <tr> 
    <form method="POST"> 
      <tr>  
        <td> 
          <label> 
            <input type="radio" name="antwort_gruppe" value="antwort_1">Antwort 1 
          </label> 
        </td> 
      </tr> 
      <tr>  
        <td> 
          <label> 
            <input type="radio" name="antwort_gruppe" value="antwort_2">Antwort 2 
          </label> 
        </td> 
      </tr> 
      <tr>  
        <td> 
          <label> 
            <input type="radio" name="antwort_gruppe" value="antwort_3">Antwort 3 
          </label> 
        </td> 
      </tr> 
      <tr>  
        <td> 
          <label> 
            <input type="radio" name="antwort_gruppe" value="antwort_4">Antwort 4 
          </label> 
        </td> 
      </tr> 
      <tr>  
        <td> 
          <input type="submit" value="antworten"> 
        </td> 
      </tr> 
    </form> 
    </table> 
  </body> 
</html>