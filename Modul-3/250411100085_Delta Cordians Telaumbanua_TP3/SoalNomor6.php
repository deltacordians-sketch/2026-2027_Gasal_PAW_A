<?php
$weight = array("Andy"=>"70", "Barry"=>"65", "Charlie"=>"75");

$output = array();
foreach($weight as $k => $v) { $output[] = "\"$k\"=>\"$v\""; }
echo "weight = (" . implode(", ", $output) . ")<br>";

$values = array_values($weight);
echo "Data kedua: " . $values[1];
?>