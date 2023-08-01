<?php

//ファイル名把握
$file_name = __FILE__;

//ファイルopen
$file_obj = new SplFileObject($file_name);

//各行を読み込み出力
foreach($file_obj as $no => $line) {
    echo "{$no}: $line";
}

$file_name = __FILE__;

//ファイル全体読み込み
$file_string = file_get_contents($file_name);

//出力
var_dump($file_string);

