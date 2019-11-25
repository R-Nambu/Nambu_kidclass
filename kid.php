<?php

$kid1 = new Kid();
$kid2 = new Kid();
$kid3 = new Kid();
$kid4 = new Kid();

// $kid1->name = 'ルーク';
// $kid1->sex = 'male';
// var_dump($kid1);

$kid1->setName('ルーク');
$kid1->setSex('male');
$kid1->setAge(18);
$kid1->showName();

$kid2->setName('レイア');
$kid2->setSex('female');
$kid2->setAge(18);
$kid2->showName();

$kid3->setName('アナキン');
$kid3->setSex('male');
$kid3->setAge(10);
$kid3->showName();

$kid4->setName('パドメ');
$kid4->setSex('female');
$kid4->setAge(11);
$kid4->showName();


// KIDクラスを作成する
class Kid
{
    // プロパティを作成する
    private $name;
    private $sex;
    private $age;

    // 初期値の設定
    public function __construct()
    {
        $this->name = 'Seed';
        $this->sex = 'male';
        $this->age = 10;
    }
    // ゲッター＆セッターメソッドを作成する
    public function setName($namae)
    {
        $this -> name = $namae;
    }

    public function getName()
    {
        return $this->$name;
    }

    public function setSex($seibetsu)
    {
        $this -> sex = $seibetsu;
    }

    public function getSex()
    {
        return $this->$sex;
    }
    
    public function setAge($nenrei)
    {
        $this -> age = $nenrei;
    }

    public function getAge()
    {
        return $this->$age;
    }
    
    // メソッドを作成する
    public function showName() {
        if ($this->sex == 'male') {
            if ($this->age <= 11) {
                echo $this->name .'くん<br>';
            } else {
                echo $this->name .'君<br>';
            }
        } else {
            if ($this->age <= 11) {
                echo $this->name .'ちゃん<br>';
            } else {
                echo $this->name .'さん<br>';
            }
        }
    }



}