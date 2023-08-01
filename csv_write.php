<?php

//書き込むデータ準備
//「複数行」あるため「配列の配列」でデータ持つ
$write_date = [
    [1, 2, 3],
    ["aaa", "bbb", "ccc"],
    [",aa", "b \" b", "c \n c"],
];

//書き込みファイルの把握
$file_name = __DIR__ . "/date.csv";

//ファイルopen
$file_obj = new SplFileObject($file_name, "w");

foreach($write_date as $datum) {
    //CSV書き込み
    $file_obj->fputcsv($datum);
}
