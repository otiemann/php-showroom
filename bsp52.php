<!DOCTYPE html>
<html lang=de>
<head>
  <title>PHP &ndash; Arithmetische Ausdrücke</title>
  <meta charset=utf-8>
</head>
<body style="font-family: courier">
  <?php
    $x=13; 
    $y=5;
    
    echo '$x='.$x.'<br>';
    echo '$y='.$y.'<br><br>';
    
    echo '$x+$y='.($x+$y).'<br>';
    echo '$x-$y='.($x-$y).'<br>';
    echo '$x*$y='.($x*$y).'<br>';
    echo '$x/$y='.($x/$y).'<br>';
    echo '$x%$y='.($x%$y).'<br><br>';
    echo 'Ganzzahlige Division: floor($x/$y)='
         .floor($x/$y).'<br>';
  ?>
</body>
</html>
