<!DOCTYPE html>
<html lang=de>
<head>
  <title>PHP &ndash; Fallunterscheidung</title>
  <meta charset=utf-8>
</head>
<body>
  <?php
    $x="zwei"; 
    
    switch($x) {
      case "eins": echo "1"; break;
      case "zwei": echo "2"; break;
      case "drei": echo "3"; break;
      default: echo "anders als 1, 2, 3";
    }
  ?>
</body>
</html>
