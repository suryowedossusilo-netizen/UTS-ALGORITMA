<?php
$N = intval(readline("Masukkan nilai N: "));

for ($i = 1; $i <= $N; $i++) {       
    for ($j = 1; $j <= $N; $j++) {
        if ($i == 1 || $i == $N || $j == 1 || $j == $N) {
            echo "*";
        }
        else if ($i == 3 || $i == $N - 2 || $j == 3 || $j == $N - 2) {
            echo "*";
        }
        else if ($N >= 7 && ($i == 5 || $i == $N - 4 || $j == 5 || $j == $N - 4)) {
            echo "*";
        }
        else {
            echo " ";
        }
    }
    echo "\n";
}
?>