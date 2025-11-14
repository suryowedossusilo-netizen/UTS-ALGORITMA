<?php
$N = intval(readline("Masukkan nilai N: "));

for ($i = 1; $i <= $N; $i++) {
    for ($j = 1; $j <= $N; $j++) {
        echo ($i * $j) . " ";
    }
    echo "\n"; // pindah baris setiap selesai 1 baris tabel
}
?>