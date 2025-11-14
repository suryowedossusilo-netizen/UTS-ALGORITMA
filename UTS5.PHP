<?php
$N = intval(readline("Masukkan nilai N: "));

for ($i = 1; $i <= $N; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "\n";
}
?>
