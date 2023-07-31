<?php

class クラス名
{
    private $変数;

    public function 関数()
    {
        // 処理
        echo "メソッドの処理 \n";
    }

    //アクセサ
    public function set変数($v)
    {
        $this->変数 = $v;
    }

    public function get変数()
    {
        return $this->変数;
    }
}

//クラスからインスタンス（オブジェクト）を作る
$obj = new クラス名();
var_dump($obj);
//メソッド呼出
$obj->関数();
//echo $obj->変数 , "\n";  変数を読むコードはエラーになる

$obj->set変数('data');
echo $obj->get変数( ) , "\n";
