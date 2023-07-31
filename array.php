<?php

//要素１つの配列
$awk = [ 123 ];
var_dump($awk);

//要素３つの配列
$awk2 = [ 999, "Hello", 3.14 ];
var_dump($awk2);

//要素１つの中身を見る・書き換える
var_dump( $awk2[0] );

//書き換え
$awk2[0] = 654321;
var_dump( $awk2[0] );

//$awkに要素を追加
$awk[ ] = 1.41421356;
$awk[ ] = "string value";
var_dump($awk);


//hash
$hash_array = [
    "key1" => "Hello",
    "key2" => 3.14,
    "key3" => 999,
];

var_dump($hash_array);

//keyを明示的に書く配列
$array_1 = [
    0 => '1st',
    1 => '2nd',
    2 => '3rd',
];
var_dump($array_1);

//順番を入れ替え・keyの値を負の値にした配列
$array_2 = [
    2 => '3rd',
    0 => '1st',
    -100 => -100,
    1 => '2nd',
];
var_dump($array_2);

//配列・連想配列の組み合わせ
$array_3 = [
    "key1" => "Hello",
    2 => '3rd',
    0 => '1st',
    -100 => -100,
    "key2" => 3.14,
    "key3" => 999,
];
var_dump($array_3);