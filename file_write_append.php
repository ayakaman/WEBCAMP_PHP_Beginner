<?php

//ファイル名把握
$file_name = __DIR__ . "/file_write_append.text";

//ファイル書き込み内容
$write_string = "書き込む内容 \n";

//ファイル書き込み
file_put_contents($file_name, $write_string, FILE_APPEND | LOCK_EX);
