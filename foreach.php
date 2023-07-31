<?php
//配列作成
$array = [
    "key1" => "Hello",
    0 => '1st',
    1 => '2nd',
    "key2" => 3.14,
];

//foreach
foreach($array as $k => $v) {
    echo "{$k} -> {$v} \n";
}

//foreach (値のみ受け取る　＊keyは受け取れない)
echo "\n";
foreach($array as $value) {
    echo "{$value} \n";
}

//multi_dimensional_array
$array = [
    [
        'key1' => 1,
        'key2' => 2,
        'key3' => 3,
    ],
    [
        'key1' => 11,
        'key2' => 22,
        'key3' => 33,
    ],
    [
        'key1' => 111,
        'key2' => 222,
        'key3' => 333,
    ],
];
var_dump($array);

//外側の配列に対する繰り返し処理
foreach($array as $key => $value) {
    echo "{$key}番目の配列 \n";

    foreach($value as $k => $v) {
        echo "{$k} : {$v} \n";
    }
    echo "\n";
}

//explode_implode
$base_string = "Stollen;Panettone;Panduro;Kouglof;Lussekatter";
echo "元の文字列 \n";
var_dump($base_string);

//explode(), ; のところで分解
$exploded_array = explode(";", $base_string);
echo "\n explodeした配列 \n";
var_dump($exploded_array);

//inplode()、 , (カンマ)で繋げて再組立
$imploded_string = implode(",", $exploded_array);
echo "\n implodeで繋げた文字列 \n";
var_dump($imploded_string);
