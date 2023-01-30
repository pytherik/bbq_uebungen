<!DOCTYPE html>

<html lang="de">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/style.css">
    <title></title>
  </head>
  <body>
    <div class="rebus">
      <div class="pic">
        <img src="" alt="">
      </div>
      <div class="pic">
        <img src="" alt="">
      </div>
      <div class="pic">
        <img src="" alt="">
      </div>
    </div>
    <div>
      <form method="POST">
          <p>Such dir die schönste Antwort aus</p>
          <input class="radio" id="one" type="radio" name="answers" value="answer1">
          <label for="one">Antwort 1</label><br>
          <input class="radio" id="two" type="radio" name="answers" value="answer2">
          <label for="two">Antwort 2</label><br>
          <input class="radio" id="three" type="radio" name="answers" value="answer3">
          <label for="three">Antwort 3</label><br>
          <input class="radio" id="four" type="radio" name="answers" value="answer4">
          <label for="three">Antwort 4</label><br><br>
          <input class="submit" type="submit" value="oké">
      </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="public/js/app.js"></script>
  </body>
</html>