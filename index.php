<?php
  $testo = "Lorem ipsum dolor sit amet, consectetur adipisicing elit.";
  $badword = $_GET["badword"];
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
  </head>
  <body>

    <p>
      <?php echo str_replace($badword, "***", $testo); ?>
    </p>

  </body>
</html>
