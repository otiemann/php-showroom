<!DOCTYPE html>
<html lang=de>
<head>
  <title>PHP &ndash; Variablen und Funktionen</title>
  <meta charset=utf-8>
</head>
<body>
  <?php
    $i=3; $s="Überschrift";
    echo "<code>\"&lt;h\".\$i.\"&gt;\".\$s
         .\"&lt;/h\".\$i.\"&gt;\"</code> und
         <code>\"&lt;h\$i&gt;\$s&lt;/h\$i&gt;\"</code> 
         ergeben beide die Zeichenkette 
         <code>&lt;h3&gt;Überschrift&lt;/h3&gt;</code>";
    echo "<br><br>";
    echo "Zusammensetzung mit Punkt: "
         ."<h".$i.">".$s."</h".$i.">";
    echo "<br>";
    echo "Variablenersetzung: "
         ."<h$i>$s</h$i>";
    echo "<br>";
    echo "keine Variablenersetzung mit ': "
         .'<code>&lt;h$i&gt;$s&lt;/h$i&gt;</code>';
    echo "<br>";
    echo "keine Variablenersetzung mit \: "
         ."<code>\$i=$i</code>";
  ?>
</body>
</html>
