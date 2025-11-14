<?php
function faktorial($n) {
    $hasil = 1;
    for ($i = 1; $i <= $n; $i++) {
        $hasil *= $i;
    }
    return $hasil;
}

function kombinasi($n, $k) {
    return faktorial($n) / (faktorial($k) * faktorial($n - $k));
}

$N = intval(readline("Masukkan nilai N: "));

for ($i = 0; $i < $N; $i++) {
    for ($j = 0; $j <= $i; $j++) {
        echo kombinasi($i, $j) . " ";
    }
    echo "\n";
}

?>