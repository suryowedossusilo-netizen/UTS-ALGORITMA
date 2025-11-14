<?php
$N = intval(readline("Masukkan nilai N: "));

$angka = 1;

for ($i = 1; $i <= $N; $i++) {
    if ($i % 2 == 1) {
        for ($j = 1; $j <= $N; $j++) {
            echo $angka++ . " ";
        }
    }
    else {
        $start = $angka + $N - 1;  
        for ($j = $start; $j >= $angka; $j--) {
            echo $j . " ";
        }
        $angka += $N; 
    }

    echo "\n";
}
?>