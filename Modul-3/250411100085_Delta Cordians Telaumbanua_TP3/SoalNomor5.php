<?php
$height = array("Andy"=>"176", "Barry"=>"165", "Charlie"=>"170");

$height["David"] = "180";
$height["Ethan"] = "172";
$height["Frank"] = "168";
$height["George"] = "175";
$height["Harry"] = "182";

$output1 = array();
foreach($height as $k => $v) { $output1[] = "\"$k\"=>\"$v\""; }
echo "height = (" . implode(", ", $output1) . ")<br>";

$keys = array_keys($height);
echo "Nilai dengan indeks terakhir: " . $height[end($keys)] . "<br><br>";

unset($height["Barry"]);

$output2 = array();
foreach($height as $k => $v) { $output2[] = "\"$k\"=>\"$v\""; }
echo "height = (" . implode(", ", $output2) . ")<br>";

$keys2 = array_keys($height);
echo "Nilai dengan indeks terakhir setelah dihapus: " . $height[end($keys2)];
?>