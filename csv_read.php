<?php

$file_name = __DIR__ . "/date.csv";

// ファイルのopen
$file_obj = new SplFileObject($file_name);
// ファイルをCSVとして読み込む
$file_obj->setFlags( SplFileObject::READ_CSV );

//
foreach($file_obj as $no => $datum) {
    // 1レコード分を出力
    var_dump($datum);
}
