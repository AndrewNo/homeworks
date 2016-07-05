<?php
include_once 'Books.php';

if ($_POST ) { 
    Books::add($_POST);
}


?>

<h1>Добавить книги в библиотеку</h1>
<form method="post" action="">
    <input type="text" name="title" placeholder="Название книги"/><br>
    <input type="text" name="price" placeholder="Цена"/><br>
    <select name="category_id">
        <option value="1">Тестовая категория</option>
    </select><br>
    <input type="submit" value="Добавить"/><br/>
    <a target="_blank" href="library.php">Перейти к бибилотеке</a>
</form>

