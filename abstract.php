<?php

abstract class 抽象クラス
{
    abstract public function 抽象メソッド();
    public function 普通のメソッド()
    {
        echo "普通のメソッド \n";
    }
}

class 子クラス extends 抽象クラス
{
    public function 抽象メソッド()
    {
        echo "子クラスで実装した抽象のメソッド \n";
    }
}

//$obj = new 抽象クラス(); XXXこれはできない。エラーとなる

$obj = new 子クラス();
$obj->普通のメソッド();
$obj->抽象メソッド();

//Trait宣言
trait 部品
{
    public function トレイトのメソッド()
    {
        echo "トレイトのメソッド \n";
    }
}
class クラス名
{
    //trait使用宣言
    use 部品;
    public function クラスのメソッド()
    {
        echo "クラスのメソッド \n";
    }
}

$obj = new クラス名();
$obj->クラスのメソッド();
$obj->トレイトのメソッド();
