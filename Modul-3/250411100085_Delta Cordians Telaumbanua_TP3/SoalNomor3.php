<?php
$fruits = array("Avocado", "Blueberry", "Cherry");

// Menambahkan 5 data baru menggunakan perulangan for
for ($i = 1; $i <= 5; $i++) {
    $fruits[] = "Buah Tambahan " . $i;
}

$arrlength = count($fruits);
echo "Panjang array saat ini: " . $arrlength . "<br><br>";

// Menampilkan seluruh isi array
for($x = 0; $x < $arrlength; $x++) {
    echo $fruits[$x];
    echo "<br>";
}
?>