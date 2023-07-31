<?php

$a = 10;
echo "global:a is {$a} \n";

//関数宣言
function myFunc()
{
    //変数代入
    $b = 999;

    //変数使用
    echo "in function:b is {$b} \n";
}

//関数呼び出し　○
myFunc();

//変数使用　×
echo "global:b is {$b} \n";
