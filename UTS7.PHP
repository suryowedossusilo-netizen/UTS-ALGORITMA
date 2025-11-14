<?php
$N = intval(readline("Masukkan nilai N: "));

for ($i = 1; $i <= $N; $i++) {
    // Cetak spasi
    for ($j = 1; $j <= $N - $i; $j++) {
        echo " ";
    }

    // Cetak bintang
    for ($k = 1; $k <= (2 * $i - 1); $k++) {
        echo "*";
    }

    echo "\n";
}
?>