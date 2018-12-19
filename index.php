<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel=icon href="/favicon.ico" type=image/x-icon>
    <title>Velvica-test by Pogonin</title>
    <link href="/styles/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
  </head>
  <body>
    <div class="wrapper">
      <div class="content">
        <div class="content-text">
          <?php
            $word = 'лужа';
            $word_res = $word;
            echo "$word_res";
            while ($word_res != 'море') {
              if(strlen($word_res) != 4){
                if($word_res == 'лужа'){
                  $word_res = 'ложа';
                }elseif($word_res == 'ложа'){
                  $word_res = 'кожа';
                }elseif($word_res == 'кожа'){
                  $word_res = 'кора';
                }elseif($word_res == 'кора'){
                  $word_res = 'гора';
                }elseif($word_res == 'гора'){
                  $word_res = 'горе';
                }elseif($word_res == 'горе'){
                  $word_res = 'море';
                }else{
                  echo 'Error: $word_res unknown';
                  break;
                }
              }else{
                $word_res = $word;
                echo 'Error: $word_res is null';
                break;
              }
              echo "<p>$word_res</p>";
            }
          ?>
        </div>
      </div>
    </div>
  </body>
</html>