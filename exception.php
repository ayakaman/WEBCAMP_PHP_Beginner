<?php

try {
    //例外発生(このコード外すとエラー解消)
    $obj = new SplFileObject('dummy');

    //その後の処理（動かないことを確認）
    echo "例外が起きた後の処理。ここは通る？ \n";
} catch(\Throwable $e) {
    echo "例外が発生したらここを通る \n";
    var_dump($e->getMessage());
}

echo "fin. \n";


try {
    //自力で例外を投げる
    throw new \Exception("自力で投げた例外");
    
    //例外発生
    $obj = new SplFileObject('dummy');
    
    //その後の処理（動かないことを確認）
    echo "例外が起きた後の処理。ここは通る？ \n";
} catch(\Throwable $e) {
    
    echo "例外が発生したらここを通る \n";
    var_dump($e->getMessage());
}

echo "fin. \n";



class MyException extends Exception
{
}

try {
    //自力で例外を投げる
    throw new \MyException("自力で投げた例外");
    
    //例外発生
    $obj = new SplFileObject('dummy');
    
    //その後の処理（動かないことを確認）
    echo "例外が起きた後の処理。ここは通る？ \n";
} catch(\Throwable $e) {
    
    echo "例外が発生したらここを通る \n";
    var_dump($e->getMessage());
}

echo "fin. \n";
