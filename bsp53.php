<!DOCTYPE html>
<html lang=de>
<head>
  <title>PHP &ndash; Zuweisungen mit Operationen</title>
  <meta charset=utf-8>
</head>
<body style="font-family: courier">
  <?php
    $x=13; 
    $y=5;
    
    echo '$x='.$x.'<br>';
    echo '$y='.$y.'<br><br>';
    
    echo '$x+=$y: '; $x+=$y;
    echo '$x='.$x.'<br>';
    echo '$y-=$x: '; $y-=$x;
    echo '$y='.$y.'<br>';
    echo '$x*=$y: '; $x*=$y;
    echo '$x='.$x.'<br>';
    echo '$x/=$y: '; $x/=$y;
    echo '$x='.$x.'<br>';
    echo '$x%=$y: '; $x%=$y;
    echo '$x='.$x.'<br><br>';
    
    echo 'Inkrementieren:<br>';
    echo '$x++ = '.($x++).'<br>';
    echo '$x='.$x.'<br>';
    echo '++$x = '.(++$x).'<br>';
    echo '$x='.$x.'<br><br>';
    
    echo 'Dekrementieren:<br>';
    echo '$y-- = '.($y--).'<br>';
    echo '$y='.$y.'<br>';
    echo '--$y = '.(--$y).'<br>';
    echo '$y='.$y.'<br><br>';    
  ?>
</body>
</html>
