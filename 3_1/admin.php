<h3>Список пользователей:</h3>
<?php
$link = mysqli_connect('localhost', 'root', '', 'php_site');
mysqli_set_charset($link, "utf8");

if (mysqli_connect_errno()) {
    echo "Ошибка соединения с базой данных" . mysqli_connect_error();
}
$query_user = "SELECT * FROM `users`";
$result = mysqli_query($link, $query_user);
$count = mysqli_num_rows($result);
if ($count) {
    while ($row = mysqli_fetch_assoc($result)) {
        $a=0;
        $a++;
        echo '<table border="1px solid black"><thead><tr><td colspan="2"><b>ID</b></td><td><b>Имя</b></td></tr></thead><tr><td><input type="checkbox" name="select['.$a.']" form="check"/><td style="width: 40px; text-align: center;">' . $row['id'] . '</td><td style="width: 150px; text-align: right;">' . $row['name'] . '</td></td></tr></table>';
    }
}
/*
if (isset($_POST['select']) && isset($_POST['delete'])){
    if ($_POST['select'] == 'on'){
        $link = mysqli_connect('localhost', 'root', '', 'php_site');
        mysqli_set_charset($link, "utf8");

        if (mysqli_connect_errno()) {
            echo "Ошибка соединения с базой данных" . mysqli_connect_error();
        }
        $query_user = "DELETE FROM `users`";
        $result = mysqli_query($link, $query_user);
    }
}*/
var_dump($_POST);
print_r($_POST['select']);
?>

<form method="post" id="check">
    <input type="submit" value="Добавить пользователя" name="insert"/>
    <input type="submit" value="Удалить пользователя" name="delete"/>
</form>

