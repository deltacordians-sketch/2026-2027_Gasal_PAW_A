<?php
$fruits = array("Avocado", "Blueberry", "Cherry");

// Tambah 5 data baru
$fruits[] = "Durian";
$fruits[] = "Elderberry";
$fruits[] = "Fig";
$fruits[] = "Grape";
$fruits[] = "Honeydew";

// Menghapus data 'Blueberry' pada indeks ke-1
unset($fruits[1]);
$fruits = array_values($fruits); // Merapikan kembali indeks array

echo "Data Blueberry dihapus.<br>";
echo "fruits = ( \"" . implode('", "', $fruits) . "\" )<br>";

$highest_index = count($fruits) - 1;
echo "Nilai dengan indeks tertinggi: " . $fruits[$highest_index];
?>