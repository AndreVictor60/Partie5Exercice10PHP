<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Partie 5 Exercice 10</title>
  </head>
  <body>
    <?php
      $hautDeFrance = array(60=>'Oise',80=>'Somme',02=>'Aisne',62=>'Pas-de-calais',59=>'Nord');
      foreach ($hautDeFrance as $key => $value) {
        echo 'Le département '.$value.' a le numéro '.$key.'<br />';
      }
     ?>
  </body>
</html>
