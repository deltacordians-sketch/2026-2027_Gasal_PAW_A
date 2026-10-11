<?php
$height = array("Andy"=>"176", "Barry"=>"165", "Charlie"=>"170");

$height["David"] = "180";
$height["Ethan"] = "172";
$height["Frank"] = "168";
$height["George"] = "175";
$height["Harry"] = "182";

$output = array();
foreach($height as $k => $v) { $output[] = "\"$k\"=>\"$v\""; }
echo "height = (" . implode(", ", $output) . ")<br><br>";

foreach($height as $name => $cm) {
    echo "$name is $cm cm tall.<br>";
}
?>