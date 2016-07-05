<?php
include_once 'Books.php';

$row = Books::getList();

foreach ($row as $book) {
    echo '
        <table border="1px solid black">
                <thead>
                    <tr>
                        <td colspan="2"><b>ID</b></td>
                        <td><b>Название книги</b></td>
                        <td>Изменить название</td>
                        <td><b>Цена</b></td>
                        <td>Изменить цену</td>
                        <td><b>Категория</b></td>
                        <td>Изменить категорию</td>
                    </tr>
                </thead>
                     <tr>
                        <td><input type="checkbox" name="select[' . $book['id'] . ']" form="check"/></td>
                        <td style="width: 40px; text-align: center;">' . $book['id'] . '</td>
                        <td style="width: 150px; text-align: right;">' . $book['title'] . '</td>
                        <td><input type="text" name = "title[' . $book['id'] . ']" form="check"/></td>
                        <td style="width: 150px; text-align: right;">' . $book['price'] . '</td>
                        <td><input type="text" name = "price[' . $book['id'] . ']" form="check"/></td>
                        <td style="width: 150px; text-align: right;">' . $book['category_id'] . '</td>
                        <td><input type="text" name = "category_id[' . $book['id'] . ']" form="check"/></td>
                     </tr>
              </table>';
}
//удаляет отмеченные в чекбоксе книги после нажатия на кнопку удалиь
if (isset($_POST['select']) && isset($_POST['delete'])) {
    foreach ($_POST['select'] as $key => $item) {
        Books::delete($key);
    }
}

//изменяет базу данных. можно менять сразу несколько экземпларов
if (isset($_POST['update'])) {     
    foreach ($row as $one) {
        $data = [];
        $data['id'] = $one['id'];
        $data['title'] = $one['title'];
        $data['price'] = $one['price'];
        $data['category_id'] = $one['category_id'];

        foreach ($_POST['title'] as $s=>$n){
            if (!empty($n) && $s == $data['id']) {
                $data['title'] = $n;
            }
        }
        foreach ($_POST['price'] as $s=>$n){
            if (!empty($n) && $s == $data['id']) {
                $data['price'] = $n;
            }
        }
        foreach ($_POST['category_id'] as $s=>$n){
            if (!empty($n) && $s == $data['id']) {
                $data['category_id'] = $n;
            }
        }
        Books::update($data);
    }
}
//а вот это я нашел в дебрях
// тырнета... оно обновляет страницу
//когда нажимаешь на кнопки
if(isset($_POST['update']) || isset($_POST['delete']) ) { echo'<META HTTP-EQUIV=Refresh Content="0;URL=library.php">';  }

//
?>

<form action="" method="post" id="check">
    <input type="submit"  value="Изменить" name="update"/>
    <input type="submit" value="Удалить выбранные книги" name="delete"/>
</form>