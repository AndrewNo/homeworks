<?php
require_once 'user.php';

$user = getUser();
requiredUser($user);

if (isset($_POST['a_color'])){
    setSettings([
        'a_color' => $_POST['a_color'],
        'width' => $_POST['width'],
    ]);

}

if (is_uploaded_file($_FILES['ava']['tmp_name'])) {
    $uploadDir = 'c:/xampp/htdocs/3/';
    $uploadFile = $uploadDir . basename($_FILES['ava']['name']);
    copy($_FILES['ava']['tmp_name'], $uploadFile);
    setSettings([
        'avatar' => $_FILES['ava']['name'],

    ]);
}


$settings = getSettings();
$a_color = (isset($settings['a_color'])? $settings['a_color'] : 'green');
$width = (isset($settings['width'])? $settings['width'] : 30);
$avatar = (isset($settings['avatar'])? $settings['avatar'] : '1.ico');

?>

Настройки: <br/>

<form enctype="multipart/form-data" method="post">
    Изменить цвет ссылок:<br/>
    <input type="text" name="a_color" value="<?=$a_color?>"><br/>
    Иизменить ширину меню:<br/>
    <input type="text" name="width" value="<?=$width?>"><br/>
    Изменить аватарку:<br/>
    <input type="file" name="ava"/><br/><br/>
    <input type="submit" value="Сохранить">
</form>


