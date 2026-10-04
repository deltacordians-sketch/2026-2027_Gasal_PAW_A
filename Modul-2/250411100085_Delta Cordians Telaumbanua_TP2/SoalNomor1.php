<?php

$matkul = ["PTI", "ALPRO", "DPW", "STRUKDAT", "JARKOM", "PAW", "PSBF", "RPL"];
$praktikum = ["JARKOM", "PAW"];

for ($i = 0; $i < count($matkul); $i++) {

    // Jika indeks 6 atau 7
    if ($i == 6 || $i == 7) {
        echo "Saya belum mengambil matkul " . $matkul[$i] . "<br>";
    }

    // Jika mata kuliah termasuk praktikum
    elseif (in_array($matkul[$i], $praktikum)) {
        echo "Saya sedang mengambil matkul " . $matkul[$i] 
             . " termasuk praktikumnya<br>";
    }

    // Selain itu
    else {
        echo "Saya sudah mengambil matkul " . $matkul[$i] 
             . " semester lalu<br>";
    }
}

?> 