<?php

class User
{
    public $name;
    public $email;
    public $pass;

    public function showProfile(){
        echo "Имя пользователя: ".$this->name."<br/>";
        echo "Почта пользователя: ".$this->email."<br/>";
        echo "Пароль пользователя: ".$this->pass."<br/><br/>";
    }

}

$user1 = new User;
$user1->name = 'Петя';
$user1->email = 'asas@gf.com';
$user1->pass = 123456;


$user2 = new User;
$user2->name = 'Вася';
$user2->email = 'were@gf.com';
$user2->pass = 123456;

$user3 = new User;
$user3->name = 'Федя';
$user3->email = 'aasdfsas@gf.com';
$user3->pass = 123456;

$user4 = new User;
$user4->name = 'Коля';
$user4->email = 'asasasde@gf.com';
$user4->pass = 123456;

$user1->showProfile();
$user2->showProfile();
$user3->showProfile();
$user4->showProfile();
