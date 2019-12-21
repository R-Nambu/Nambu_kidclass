<?php

$robot1 = new Robot();
$robot2 = new Robot();
$robot3 = new Robot();

// 初期値を出力
echo '初期値の名前：'.$robot->getName().'<br>';
echo '初期値の食べ物：'.$robot->getFood().'<br>';


$robot1->setName('ドラえもん');
$robot2->setName('ドラミ');
$robot3->setName('アンパンマン');

$robot1->setFood('どら焼き');
$robot2->setFood('メロンパン');
$robot3->setFood('愛と勇気');

// var_dump($robot1);
// var_dump($robot2);
// var_dump($robot3);

$robot1->greeting();
$robot2->greeting();
$robot3->greeting();



// Robotクラス 最初の文字は大文字にする
class Robot
{
    // プロパティ追加
    private $name;
    private $food;
    
    // 初期値の設定
    public function __construct()
    {
        $this->name = 'のび太';
        $this->food = 'おにぎり';
    }


    // メソッド追加
    private function talk()
    {
        echo 'こんにちは、ボクの名前は' .$this->name .'です<br>';
    }
    
    private function eat()
    {
        echo '好きな食べ物は' .$this->food .'です<br>';
    }
    
    public function greeting()
    {
        $this->talk();
        $this->eat();
    }


    // セッター＆ゲッター追加
    public function setName($namae)
    {
        $this -> name = $namae;
    }

    public function getName()
    {
        return $this->$name;
    }

    public function setFood($tabemono)
    {
        $this -> food = $tabemono;
    }

    public function getFood()
    {
        return $this->$food;
    }

}

