<!DOCTYPE html>
<html lang=de>
<head>
  <title>PHP &ndash; Logische Ausdrücke</title>
  <meta charset=utf-8>
</head>
<body style="font-family: courier">
  <?php
    function val($b) { 
      if ($b) return "true"; 
      else return "false"; 
    }
    
    $x=13; 
    $y=5;
    
    echo '$x='.$x.'<br>';
    echo '$y='.$y.'<br><br>';
    
    echo '$x==$y: '.val($x==$y).'<br>';
    echo '$x==$y+8: '.val($x==$y+8).'<br>';
    echo '$x-3!=$y+3: '.val($x-3!=$y+3).'<br>';
    echo '$x<$y: '.val($x<$y).'<br>';
    echo '$x>$y: '.val($x>$y).'<br>';
    echo '$x<=13: '.val($x<=13).'<br>';
    echo '$y>=6: '.val($y>=6).'<br>';
    echo '($y+1)%2==0 && ($y+1)%3==0: '
         .val(($y+1)%2==0 && ($y+1)%3==0).'<br>';
    echo '$x<10 || $x>=100: '
         .val($x<10 || $x>=100).'<br>';
    echo '!($x<10 || $x>=100): '
         .val(!($x<10 || $x>=100)).'<br>';
    echo '$x==\'13\': '.val($x=='13').'<br>';
    echo '$x===\'13\': '.val($x==='13').'<br>';
  ?>
</body>
</html>
