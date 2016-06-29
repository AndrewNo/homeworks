<?php
class User
{
    public function showProfile(){
        echo "Имя пользователя: ".$this->name."<br/>";
        echo "Почта пользователя: ".$this->email."<br/>";
        echo "Пароль пользователя: ".$this->pass."<br/><br/>";
    }

    public function __construct($name, $email, $pass)
    {
        $this->name = $name;
        $this->email = $email;
        $this->pass = $pass;
    }

    public function __destruct()
    {
        echo "Пользователь ".$this->email." удален!<br/>";
    }
}

$user1 = new User('Петя', 'asas@gf.com', 1234569);
$user2 = new User('Вася', 'were@gf.com', 123456);
$user3 = new User('Федя', 'aasdfsas@gf.com', 123456);
$user4 = new User('Коля', 'asasasde@gf.com', 123456);

unset($user1);
unset($user2);
unset($user3);
unset($user4);
