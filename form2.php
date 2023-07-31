<?php

// h()定義
function h(string $s) : string
{
    return htmlspecialchars($s, ENT_QUOTES);
}

//HTML formから入る情報一覧
$html_form_params = [
    "pw" => "パスワード",
    "radio_a" => "ラジオボタン",
    "check" => "チェックボックス",
    "sele" => "セレクトボックス",
    "tarea" => "テキストエリア",
    "hide" => "隠れた入力(haidden)",
];

//HTML foemから情報取得
$datum = [ ];

//データ取得処理
foreach($html_form_params as $name => $type) {
    $datum[$name] = $_POST[$name] ?? "";
}

//入力データ確認（XXX 今回は一端、var_dumpでのデータ確認のみ）
var_dump($datum);