<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Partie 7 Exercice 4</title>
  </head>
  <body>
    <?php
      if (isset($_POST['firstName']) AND isset($_POST['lastName']))
      {
        echo 'Bonjour, ' . $_POST['firstName'] . ' ' . $_POST['lastName'];
      }
     ?>
  </body>
</html>
