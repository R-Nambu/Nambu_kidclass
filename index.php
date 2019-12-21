<?php

// インスタンス化 = 初期化
$car = new Car();
var_dump($car);

// プロパティ（変数）とメソッドをインスタンスから呼び出すために、アロー演算子を使う

// $car->speed = 100;
$car->setSpeed(100);
$car->start();
$car->run();
$car->stop();

// $car->showSpeed();

$car2 = new Car();
// $car2->setSpeed = 150;
$car2->setSpeed(-100);
$car2->run();

// 車のクラス
class Car
{
    // 時速の値を保持するプロパティ
    private $speed;
    
    // コントラクタ
    // 初期値
    public function __construct()
    {
        $this->speed = 60;
    }


    // 時速を設定する
    // speedプロパティのセッター
    public function setSpeed($jisoku)
    {
        // if ($jisoku < 0) {
        //     $this->speed = 0;
        // } else {
        //     $this->speed = $jisoku;
        // }

        if ($jisoku >= 0 && $jisoku <= 500) {
            $this->speed = $jisoku;
        }
    }

    // speedプロパティのゲッター
    public function getSpeed()
    {
        return $this->speed;
    }

    // エンジンをかける
    public function start()
    {
        echo 'エンジンをかけました<br>';
    }

    // 走る
    public function run()
    {
        echo '走り出しました<br>';

        // 時速を表示させる処理を呼び出します
        $this->showSpeed();
    }

    private function showSpeed()
    {
        echo '時速'.$this->speed.'km/hで走っています<br>';
    }
    
    // 止まる
    public function stop()
    {
        echo '止まりました<br>';
    }

}