<?php
// 整数型の確認
$i = 123;
var_dump($i);

// 整数型の最大/最小値の確認
var_dump(PHP_INT_MAX);
var_dump(PHP_INT_MIN);

// 「最大値」を超えた値はどうなる？
$over_max = PHP_INT_MAX + 1;
var_dump($over_max);

// 「最小値」を下回った値はどうなる？
$under_min = PHP_INT_MIN -1 ;
var_dump($under_min);

$f = 3.14;
var_dump($f);

// ゼロ除算の確認
$f = 10 / 0;

$s = "Hello";
var_dump($s);

// 1文字目にアクセス
echo $s[1] , "\n";

// マルチバイトで0文字目にアクセス
$multi_string = "あいうえお";
var_dump($multi_string);
echo $multi_string[0] , "\n";

$num_i = 123;
$num_s = "123";
var_dump($num_i);
var_dump($num_s);

// シングルクォートとダブルクォートの違い
$double_s = "num is {$num_i} \n";
$single_s = 'num is {$num_i} \n';
var_dump($double_s);
var_dump($single_s);