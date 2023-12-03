<!DOCTYPE html>
<html lang=de>
<head>
  <title>Formular</title>
  <meta charset=utf-8>
  <style>
    table { 
      border: 1px solid black;
      border-collapse: collapse; 
    }
    td { 
      border: 1px solid black;
      padding: 10px;
      vertical-align: top;
    }
    .auswertung {
      color: blue;
    }
    .wert {
      background-color: lightblue;
    }
  </style>
</head>
<body>
  <h1>Auswertung</h1>
  
  <?php
    $zeit=$_SERVER["REQUEST_TIME"];
    echo "Die Anfrage kam von der IP-Adresse "
         .$_SERVER["REMOTE_ADDR"]
         ." (Server "
         .$_SERVER["HTTP_HOST"].")"
         ." am ".date("d.m.Y",$zeit)
         ." um ".date("H:i:s",$zeit)
         ." Uhr<br><br>";
  ?>

  <form name="beispiel-formular" action="bsp60b.php" method="get">

  <table>
    <tr>
      <td>
        Mehrzeiliges Textfeld mit Eingabe:<br>
        <textarea name="text2_m">Text über
        mehrere Zeilen</textarea><br>
        <?php 
          echo "<span class=auswertung>";
          if (!empty($_GET["text2_m"])) {
            echo "Ihre Eingabe war "
                 ."<span class=wert>"
                 .$_GET["text2_m"]
                 ."</span>.<br>";
            echo "URL-codiert: "
                 ."<span class=wert>"
                 .urlencode($_GET["text2_m"])
                 ."</span>";
          } else echo "Sie haben nichts eingegeben.";
          echo "</span>";
        ?>
      </td>
      <td>
        Mehrzeiliges Textfeld ohne Eingabe:<br>
        <textarea name="text2_o"></textarea><br>
        <?php 
          echo "<span class=auswertung>";
          if (!empty($_GET["text2_o"])) {
            echo "Ihre Eingabe war "
                 ."<span class=wert>"
                 .$_GET["text2_o"]
                 ."</span>.<br>";
            echo "URL-codiert: "
                 ."<span class=wert>"
                 .urlencode($_GET["text2_o"])
                 ."</span>";
          } else echo "Sie haben nichts eingegeben.";
          echo "</span>";
        ?>
      </td>
    </tr>
  </table><br><br>

  <button>Absenden</button>

  </form>
</body>
</html>
