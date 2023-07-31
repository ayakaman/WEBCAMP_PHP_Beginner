<?php

function numToDouble(int $i): int
{
    //2倍
    $ret = $i * 2;

    //戻り値
    return $ret;
}

$num = numToDouble(10);
echo "10 を2倍にしたら {$num} になった \n";

//2つの引数を「加算」　関数
function numAdd(int $a, int $b): int
{
    //加算
    $ret = $a + $b;

    //戻り値
    return $ret;
}

$add = numAdd(5,6);
echo "5 と 6 を足したら {$add} になる \n";

//php8で使用できる書式
function numAdd(int|float $a, int|float $b): int|float