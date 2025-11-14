<?php
$N = intval(readline("Masukkan nilai N: "));

for ($i = $N; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "\n";
}
?>