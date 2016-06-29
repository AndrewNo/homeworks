<?php

class User
{
    public $name;
    public $email;
    public $pass;

    public function showProfile()
    {
        echo "Имя пользователя: " . $this->name . "<br/>";
        echo "Почта пользователя: " . $this->email . "<br/>";
        echo "Пароль пользователя: " .$this->pass. "<br/><br/>";
    }

    public function __construct($name, $email, $pass)
    {
        $this->name = $name;
        $this->email = $email;
        $this->pass = $pass;
    }

}

class SuperUser extends User
{
    public $role;
    public function __construct($name, $email, $pass, $role)
    {
        User::__construct($name, $email, $pass);

        $this->role = $role;
    }

    public function showProfile()
    {
        User::showProfile();
        echo "Роль: " .$this->role. "<br/><br/>";
    }

}

$user1 = new User('Петя', 'asas@gf.com', 1234569);
$user2 = new User('Вася', 'were@gf.com', 123456);
$user3 = new User('Федя', 'aasdfsas@gf.com', 123456);
$user4 = new User('Коля', 'asasasde@gf.com', 123456);
$admin = new SuperUser("Админ", "admin@admin.com", "admin", "SuperAdmin");

/*$user1->showProfile();
$user2->showProfile();
$user3->showProfile();
$user4->showProfile();*/
$admin->showProfile();
