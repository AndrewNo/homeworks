<?php
session_start();

function requiredUser($user)
{
    if ($user === null){
        header('location: form.php');
        die();
    }
    
}

/*function getSettings()
{
    $user = getUser();
    requiredUser($user);
    $path = md5($user['name']).'.settings';
    if (file_exists($path)) {
        $settings = file_get_contents($path);
        return unserialize($settings);
    }else{
        return[];
    }
}*/

function getSettings()
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

/*function setSettings($settings)
{
    $user = getUser();
    requiredUser($user);
    file_put_contents(md5($user['name']).'.settings', serialize($settings));   
}*/
function setSettings($settings)
{
    $user = getUser();
    requiredUser($user);
    $userSetting = implode(", ", $settings);
    $userSetting = preg_replace('/([^\s\,]+)/u', "'$1'", $userSetting);
    $link = mysqli_connect('localhost', 'root', '', 'php_site');
    mysqli_set_charset($link, "utf8");

    if (mysqli_connect_errno()) {
        echo "Ошибка соединения с базой данных" . mysqli_connect_error();
    }
    $query ="INSERT INTO `settings` VALUES ($userSetting)";
    var_dump($query);die;
    $result = mysqli_query($link, $query);


    //file_put_contents(md5($user['name']).'.settings', serialize($settings));
}

function getAllUsers()
{
    $users = [];
    $link = mysqli_connect('localhost', 'root', '', 'php_site');
    mysqli_set_charset($link, "utf8");

    if (mysqli_connect_errno()) {
        echo "Ошибка соединения с базой данных" . mysqli_connect_error();
    }
    $query_user ="SELECT * FROM `users`";
    $result = mysqli_query($link, $query_user);
    $count = mysqli_num_rows($result);
    if ($count){
        while ($row = mysqli_fetch_assoc($result)){
            array_push($users, $row);
        }
    }


    return $users;

}

function getUser()
{

    $user = null;
    if (isset($_SESSION["id"])){
        foreach (getAllUsers() as $userOne){
            if ($userOne["id"] == $_SESSION["id"]){
                $user = $userOne;
            }
        }
    }
    return $user;
}
function authUser($id)
{
    $_SESSION["id"] = $id;
}


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