<?php

//新しい例外クラス作成
class MyException extends Exception
{
}

try {
    //例外投げ
    throw new \MyException("自力で投げた例外");
    throw new TypeError("自力で投げた例外 type Error");
    throw new Exception("自力で投げた例外 Exception");
}catch(MyException $e) {
    echo "MyException をキャッチしました \n";
    var_dump($e->getMessage());
}catch(\Error $e) {
    echo "Error をキャッチ \n";
    var_dump($e->getMessage());
}catch(\Throwable $e) {
    echo "Throwable をキャッチ \n";
    var_dump($e->getMessage());
}

echo "fin. \n";