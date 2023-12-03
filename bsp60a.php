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

  <form name="beispiel-formular" action="bsp60a.php" method="get">

  <table>
    <tr>
      <td>
        Einzeiliges Textfeld mit Eingabe:<br>
        <input type=text name="text1_m" value="etwas Text"><br>
        <?php 
          echo "<span class=auswertung>";
          if (!empty($_GET["text1_m"])) {
            echo "Ihre Eingabe war "
                 ."<span class=wert>"
                 .$_GET["text1_m"]
                 ."</span>.<br>";
            echo "URL-codiert: "
                 ."<span class=wert>"
                 .urlencode($_GET["text1_m"])
                 ."</span>";
          } else echo "Sie haben nichts eingegeben.";
          echo "</span>";
        ?>
      </td>
      <td>
        Einzeiliges Textfeld ohne Eingabe:<br>
        <input type=text name="text1_o"><br>
        <?php 
          echo "<span class=auswertung>";
          if (!empty($_GET["text1_o"])) {
            echo "Ihre Eingabe war "
                 ."<span class=wert>"
                 .$_GET["text1_o"]
                 ."</span>.<br>";
            echo "URL-codiert: "
                 ."<span class=wert>"
                 .urlencode($_GET["text1_o"])
                 ."</span>";
          } else echo "Sie haben nichts eingegeben.";
          echo "</span>";
        ?>        
      </td>
    </tr>
    <tr>
      <td>
        Datumseingabe mit Wert:<br>
        <input type=date name="datum_m" value="2020-06-06"><br>
        <?php 
          echo "<span class=auswertung>";
          if (!empty($_GET["datum_m"])) 
            echo "Ihre Eingabe war "
                 ."<span class=wert>"
                 .$_GET["datum_m"]
                 ."</span>.";
          else echo "Sie haben nichts eingegeben.";
          echo "</span>";
        ?>
      </td>
      <td>    
        Datumseingabe ohne Wert:<br>
        <input type=date name="datum_o"><br>
        <?php 
          echo "<span class=auswertung>";
          if (!empty($_GET["datum_o"])) 
            echo "Ihre Eingabe war "
                 ."<span class=wert>"
                 .$_GET["datum_o"]
                 ."</span>.";
          else echo "Sie haben nichts eingegeben.";
          echo "</span>";
        ?>
      </td>
    </tr>
    <tr>
      <td>
        Zeiteingabe mit Wert:<br>
        <input type=time name="zeit_m" value="12:35"><br>
        <?php 
          echo "<span class=auswertung>";
          if (!empty($_GET["zeit_m"])) 
            echo "Ihre Eingabe war "
                 ."<span class=wert>"
                 .$_GET["zeit_m"]
                 ."</span>.";
          else echo "Sie haben nichts eingegeben.";
          echo "</span>";
        ?>
      </td>
      <td>
        Zeiteingabe ohne Wert:<br>
        <input type=time name="zeit_o"><br>
        <?php 
          echo "<span class=auswertung>";
          if (!empty($_GET["zeit_o"])) 
            echo "Ihre Eingabe war "
                 ."<span class=wert>"
                 .$_GET["zeit_o"]
                 ."</span>.";
          else echo "Sie haben nichts eingegeben.";
          echo "</span>";
        ?>
      </td>
    </tr>
    <tr>
      <td>
        Zahleingabe mit Wert:<br>
        <input type=number name="zahl_m" value="3028"><br>
        <?php 
          echo "<span class=auswertung>";
          if (!empty($_GET["zahl_m"])) 
            echo "Ihre Eingabe war "
                 ."<span class=wert>"
                 .$_GET["zahl_m"]
                 ."</span>.";
          else echo "Sie haben nichts eingegeben.";
          echo "</span>";
        ?>
      </td>
      <td>
        Zahleingabe ohne Wert:<br>
        <input type=number name="zahl_o"><br>
        <?php 
          echo "<span class=auswertung>";
          if (!empty($_GET["zahl_o"])) 
            echo "Ihre Eingabe war "
                 ."<span class=wert>"
                 .$_GET["zahl_o"]
                 ."</span>.";
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
