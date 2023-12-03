<!DOCTYPE html>
<html lang=de>
<head>
  <title>PHP &ndash; Schleifen</title>
  <meta charset=utf-8>
</head>
<body>
  <?php
    $i=11; 
    
    echo $i;
    
    while ($i>1) {
      if ($i%2==0) $i=$i/2;
      else $i=(3*$i+1)/2;
      echo ", $i";
    }

    echo "<hr>";

    $i=1;

    do {
      echo "$i ";
      $i*=2;
    } while ($i<100);

    echo "<hr>";

    for ($i=1; $i<10; $i++) echo ($i*$i).", ";
    echo $i*$i;  
  ?>
</body>
</html>
