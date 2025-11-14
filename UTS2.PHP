<?php
$angka = intval(readline("Masukkan angka: "));

if ($angka < 0) {
    echo "Tidak menerima bilangan negatif";
} else if ($angka % 2 == 0) {
    echo "Genap";
} else {
    echo "Ganjil";
}
?>
