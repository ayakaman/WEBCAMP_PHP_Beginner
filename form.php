<?php

error_reporting(-1);
ini_set('display_errors', 'on');

//h()関数定義
function h(string $s) : string
{
    return htmlspecialchars($s, ENT_QUOTES);
}
//データ取得
$input = $_GET['input_text'] ?? "";

//出力
echo "あなたが入力したのは " , h($input) , "ですね";
