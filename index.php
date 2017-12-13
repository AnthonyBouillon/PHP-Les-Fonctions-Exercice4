<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Les fonctions Exercice 4</title>
  </head>
  <body>
<?php
  function number(){
    $number1 = 41;
    $number2 = 40;
    if($number1 < $number2){
      echo 'Le premier nombre est plus petit';
    } elseif($number1 > $number2){
      echo 'Le premier nombre est plus grand';
    } else{
      echo 'Les deux nombres sont identiques';
    }
  };
  echo number();
 ?>
  </body>
</html>
