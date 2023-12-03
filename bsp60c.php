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

  <form name="beispiel-formular" action="bsp60c.php" method="get">

  <table>
    <tr>
      <td>
        Einfachauswahl mit Eingabe:<br>
        <label>
          <input type=radio name="farbe_m" value="rot" checked>
          rot
        </label>&nbsp;&nbsp;&nbsp;
        <label>
          <input type=radio name="farbe_m" value="grün">
          grün
        </label><br>
        <?php 
          echo "<span class=auswertung>";
          if (isset($_GET["farbe_m"]))
            echo "Ihre Eingabe war "
                 ."<span class=wert>"
                 .$_GET["farbe_m"]
                 ."</span>.<br>";
          else echo "Sie haben nichts eingegeben.";
          echo "</span>";
        ?>
      </td>
      <td>
        Einfachauswahl ohne Eingabe:<br>
        <label>
          <input type=radio name="farbe_o" value="rot">
          rot
        </label>&nbsp;&nbsp;&nbsp;
        <label>
          <input type=radio name="farbe_o" value="grün">
          grün
        </label><br>
        <?php 
          echo "<span class=auswertung>";
          if (isset($_GET["farbe_o"]))
            echo "Ihre Eingabe war "
                 ."<span class=wert>"
                 .$_GET["farbe_o"]
                 ."</span>.<br>";
          else echo "Sie haben nichts eingegeben.";
          echo "</span>";
        ?>
      </td>
    </tr>
  </table><br><br>

  <button>Absenden</button>

  </form>
</body>
</html>
