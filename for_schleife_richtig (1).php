<!DOCTYPE html>
<html>
        <head>
            <title>For-Schleife</title>
        </head>
        <body>
            <h1>For_Schleife_richtig</h1>

            <form method = "post">

                <input type="number" name="startwert" min="1" max="20" placeholder = "Startwert" style="width: 100px">
                <br>
                <input type="number" name="abbruchwert" min="1" max="20" placeholder = "Abbruchwert" style="width: 100px">
                <br>
                <input type="submit" value="Start">

            </form>

            <?php 
                if ($_SERVER["REQUEST_METHOD"]=="POST")  {

                    $inhalt_des_arrays_dollar_post = $_POST;
                    $startwert;
                    $abbruchwert;

                    if (array_key_exists('startwert',$inhalt_des_arrays_dollar_post)){
                        $startwert = $inhalt_des_arrays_dollar_post['startwert'];
                    } 

                    if (array_key_exists('abbruchwert',$inhalt_des_arrays_dollar_post)){
                        $abbruchwert = $inhalt_des_arrays_dollar_post['abbruchwert'];
                    } 

                    for ($x = $startwert; $x < $abbruchwert; ++$x) {
                        echo "Durchlauf Nummer: $x (for-schleife)<br>";
                    }

                    while ($startwert < $abbruchwert) {
                        echo "Durchlauf Nummer: $startwert (while-schleife)<br>";
                        $startwert++;
                    }
                }
            ?>
        </body>
</html>  