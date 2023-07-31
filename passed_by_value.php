<?php
// 関数宣言
function myFunc(int $val)
{
    // $i値を2倍
    $val *= 2; // "$i = $i * 2" と同じ意味を持つ、複合演算子という書き方
    // 値を確認
    echo "in myFunc, i is {$val} \n";
}

// 変数へ代入
$i = 10;
// 関数の実行
myFunc($i);
// 変数 i の中身の確認
echo "i is {$i} \n";