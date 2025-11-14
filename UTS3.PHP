<?php
$N = intval(readline("Masukkan nilai N: "));
$jumlah = 0;

for ($i = 1; $i <= $N; $i++) {
    $jumlah += $i;
}

echo "Jumlah deret 1 sampai $N adalah: $jumlah";
?>