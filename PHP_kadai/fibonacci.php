<?php

function fibo(int $num)
{
    if ($num === 0) {
        return 0;

    } elseif ($num === 1) {
        return 1;

    } elseif ($num === 2) {
        return 1;

    }
    return fibo($num - 1) + fibo($num - 2);
}

for ($i = 0; $i < 22; $i++) {
    echo sprintf ( fibo($i) );
    echo "\n";
}