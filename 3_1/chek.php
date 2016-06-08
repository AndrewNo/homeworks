<?php
/*
function regUser($name, $password)
{

    $link = mysqli_connect('localhost', 'root', '', 'php_site');
    mysqli_set_charset($link, "utf8");

    if (mysqli_connect_errno()) {
        echo "Ошибка соединения с базой данных" . mysqli_connect_error();
    }
    $query ="INSERT INTO `users`(`name`, `password`) VALUES ('$name', '$password')";
    $result = mysqli_query($link, $query);
    $id = mysqli_insert_id($link);
    authUser($id);
    return true;
}

function setSettings($settings)
{
    $user = getUser();
    requiredUser($user);
    $link = mysqli_connect('localhost', 'root', '', 'php_site');
    mysqli_set_charset($link, "utf8");

    if (mysqli_connect_errno()) {
        echo "Ошибка соединения с базой данных" . mysqli_connect_error();
    }
    $query ="INSERT INTO `settings`(`a_color`, `head_color`, `footer_color`, `width`, `font`, `ava`) VALUES ('$settings')";
    $result = mysqli_query($link, $query);


    //file_put_contents(md5($user['name']).'.settings', serialize($settings));
}*/




/*function getSettings()
{
    $user = getUser();
    requiredUser($user);
    $settings = [];
    $link = mysqli_connect('localhost', 'root', '', 'php_site');
    mysqli_set_charset($link, "utf8");

    if (mysqli_connect_errno()) {
        echo "Ошибка соединения с базой данных" . mysqli_connect_error();
    }
    $query_user ="SELECT * FROM `settings`";
    $result = mysqli_query($link, $query_user);
    $count = mysqli_num_rows($result);
    if ($count){
        while ($row = mysqli_fetch_assoc($result)){
            array_push($settings, $row);
        }
    }
    return $settings;

}
echo '<pre>';
print_r(getSettings());*/

$a =['sdf', 'safd', 125];
$b = implode("', '", $a);
echo $b;