<?php

// 絶対値の計算
$i = -100;
$j = abs($i);
echo "{$i} の絶対値は {$j} \n";

//端数の切捨
$f = 3.5;
$f_floor = floor($f);
echo "{$f} の端数を切捨 {$f_floor} \n";

//切上
$f_ceil = ceil($f);
echo "{$f} の端数を切上 {$f_ceil} \n";

//declare(strict_types=1)
declare(strict_types=1);
$i = random_int('1', '999');
echo "{$i} \n";