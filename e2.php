<?php
// 1
$array = [
    "key1" => "red",
    "key2" => "Yellow",
    "key3" => "Green",
    "key4" => "Blue",
    "key5" => "Black",
];

foreach($array as $k => $v) {
    echo "{$k} -> {$v} \n";
}

//1 回答
$colors = [
    "Red",
    "Yellow",
    "Green",
    "Blue",
    "Black",
];
//
foreach($colors as $v) {
    echo "{$v} \n";
}


//2
$colors = [
    "Red" => "#ff0000",
    "Yellow" => "#ffff00",
    "Green" => "#00ff00",
    "Blue" => "#0000ff",
    "Black" => "#000000",
];

foreach($colors as $k => $v) {
    echo "{$k} = {$v} \n";
}