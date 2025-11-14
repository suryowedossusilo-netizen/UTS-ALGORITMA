<?php
$nilai = intval(readline("Masukkan nilai (0-100): "));

if ($nilai < 0 || $nilai > 100) {
    echo "Input tidak valid!";
    exit;
}

$grade = ["E", "E", "E", "E", "E", "D", "C", "B", "A", "A", "A"];

echo "Kategori: " . $grade[intval($nilai / 10)];
?>