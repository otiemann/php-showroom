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

  <form name="beispiel-formular" action="bsp60d.php" method="get">

  <table>
    <tr>
      <td>
        Drop-Down-Menü mit Auswahl:<br>
        <select name="einfachmenue_m">
          <option value=0>Bitte auswählen</option>
          <option value=1>erste Auswahl</option>
          <option value=2>zweite Auswahl</option>
          <option value=3 selected>dritte Auswahl</option>
          <option value=4>vierte Auswahl</option>
          <option value=5>fünfte Auswahl</option>
        </select><br>
        <?php 
          echo "<span class=auswertung>";
          echo "Ihre Eingabe war "
               ."<span class=wert>"
               .$_GET["einfachmenue_m"]
               ."</span>.";
          echo "</span>";
        ?>
      </td>
      <td>
        Drop-Down-Menü ohne Auswahl:<br>
        <select name="einfachmenue_o">
          <option>Bitte auswählen</option>
          <option value=1>erste Auswahl</option>
          <option value=2>zweite Auswahl</option>
          <option value=3>dritte Auswahl</option>
          <option value=4>vierte Auswahl</option>
          <option value=5>fünfte Auswahl</option>
        </select><br>
        <?php 
          echo "<span class=auswertung>";
          echo "Ihre Eingabe war "
               ."<span class=wert>"
               .$_GET["einfachmenue_o"]
               ."</span>.";
          echo "</span>";
        ?>
      </td>
    </tr>
  </table><br><br>

  <button>Absenden</button>

  </form>
</body>
</html>
