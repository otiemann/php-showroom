<!DOCTYPE html>
<html lang=de>
<head>
  <title>PHP &ndash; Fallunterscheidung</title>
  <meta charset=utf-8>
</head>
<body>
  <?php
    $i=5; 
    
    echo "Wert von \$i: $i<br>";
    
    if ($i==7) echo '$i ist gleich 7<hr>';
    else echo '$i ist ungleich 7<hr>';
    
    if ($i=7) echo '$i ist gleich 7<br>';
    echo "Wert von \$i: $i<hr>";
    
    if ($i=0) echo '$i ist gleich 0<br>';
    else {
      echo '$i wurde auf 0 gesetzt; ';
      echo 'da 0 als false interpretiert wird, ';
      echo 'wird der else-Zweig ausgeführt<br>';
    }
    echo "Wert von \$i: $i<br>";
  ?>
</body>
</html>
