<?php
$fruits = array("Avocado", "Blueberry", "Cherry");

// Menambahkan 5 data baru ke array $fruits
$fruits[] = "Durian";
$fruits[] = "Elderberry";
$fruits[] = "Fig";
$fruits[] = "Grape";
$fruits[] = "Honeydew";

// Menampilkan isi array
echo "fruits = ( \"" . implode('", "', $fruits) . "\" )<br>";

// Menampilkan nilai dengan indeks tertinggi (elemen terakhir)
$highest_index = count($fruits) - 1;
echo "Nilai dengan indeks tertinggi: " . $fruits[$highest_index];
?>