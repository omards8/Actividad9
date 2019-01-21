<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    echo "<br>Ejercicio 1:";
    echo "<br>";
    $i=0;
    while ($i < 4) {
      echo "*<br>";
      $i++;
    }

    echo "<br><br>";
    echo "Ejercicio2:<br>";
    for ($i=0; $i<5 ; $i++) {
      for ($j=0; $j<5 ; $j++) {
        echo " * ";
      }
      echo "<br>";
    }

    echo "<br><br>";
    echo "Ejercicio3:<br>";
    $car=" * ";
    for ($i=1; $i<8 ; $i++) {
      echo $car;
      echo "<br>";
      $car .= " * ";
    }

    echo "<br><br>";
    echo "Ejercicio 4:<br>";
    $a = " * ";
    $b = " * * * ";
    $c = " * * * * * ";
    echo $a;
    echo "<br>";
    echo $b;
    echo "<br>";
    echo $c;
    echo "<br>";
    echo $b;
    echo "<br>";
    echo $a;

    echo "<br><br>";
    echo "Ejercicio 5:<br>";
    $a = "*";
    $b = "***";
    $c = "*****";
    $d = "*******";
    $e = "*********";
    echo $a;
    echo "<br>";
    echo $b;
    echo "<br>";
    echo $c;
    echo "<br>";
    echo $d;
    echo "<br>";
    echo $e;
     ?>

  </body>
</html>
