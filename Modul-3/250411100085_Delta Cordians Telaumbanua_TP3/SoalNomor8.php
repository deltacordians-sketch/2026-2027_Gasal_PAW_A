<?php
$weight = array("Andy"=>"70", "Barry"=>"65", "Charlie"=>"75");

$output = array();
foreach($weight as $k => $v) { $output[] = "\"$k\"=>\"$v\""; }
echo "weight = (" . implode(", ", $output) . ")<br><br>";

$keys = array_keys($weight);
$arrlength = count($weight);

for($x = 0; $x < $arrlength; $x++) {
    $name = $keys[$x];
    echo "$name is " . $weight[$name] . " kg.<br>";
}
?>