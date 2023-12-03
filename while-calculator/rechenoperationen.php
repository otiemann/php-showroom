<style>
    td, th {
        border: 1px solid black;
        padding: 5px;
    }
</style>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $zahl1 = $_POST['zahl1'];
    $i = 1;

    echo "<table style='border: 1px solid black;'>";
    echo "<tr><th>Zahl2</th><th>Zahl1 + Zahl2</th><th>Zahl 1 - Zahl2</th><th>Zahl1 * Zahl2</th><th>Zahl1 / Zahl2</th></tr>";

    while ($i <= 10) {
        $add = $zahl1 + $i;
        $sub = $zahl1 - $i;
        $mul = $zahl1 * $i;
        $div = $zahl1 / $i;

        echo "<tr><td>$i</td><td>$add</td><td>$sub</td><td>$mul</td><td>$div</td></tr>";
        $i++;
    }

    echo "</table>";
}
?>
