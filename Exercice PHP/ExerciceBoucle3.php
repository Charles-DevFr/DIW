<?php

$Nbrcol=10;
$Nbrligne=10;

echo '<table border="1" width="400"';

echo "<table>";

echo "<tr><th>0</th>";
for ($i = 1; $i <= 10; $i++) {
  echo "<th>" . $i . "</th>";
}
echo "</tr>";

for ($j = 1; $j <= 10; $j++) {
  echo "<tr>";
  echo "<th>" . $j . "</th>";
  for ($i = 1; $i <= 10; $i++) {
    $produit = $j * $i;
    echo "<td>" . $produit . "</td>";
  }
  echo "</tr>";
}

echo "</table>";
?>