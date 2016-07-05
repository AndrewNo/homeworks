<?php
include_once "db.class.php";
const HOST = 'localhost';
const USER = 'root';
const PASSWORD = '';
const DB_NAME = 'books';

class Books
{
    public static function add($data)
    {
        
        DB::getConnection()->query('SET NAMES UTF8');

        // Осторожно!
        $title = DB::getConnection()->escape($data['title']);
        $price = (float)$data['price'];
        $category_id = (int)$data['category_id'];

        return DB::getConnection()->query(
            "insert into books 
				set title = '{$title}',
					price = '{$price}',
					category_id = '{$category_id}'
			");

    }

    public static function update($data)
    {
        
        DB::getConnection()->query('SET NAMES UTF8');

        // Осторожно!
        $id = (int)$data['id'];
        $title = DB::getConnection()->escape($data['title']);
        $price = (float)$data['price'];
        $category_id = (int)$data['category_id'];

        return DB::getConnection()->query(
            "update books 
				set title = '{$title}',
					price = '{$price}',
					category_id = '{$category_id}'
			where id = {$id}");
    }

    public static function delete($id)
    {
        
        DB::getConnection()->query('SET NAMES UTF8');

        return DB::getConnection()->query("DELETE FROM `books` WHERE id ={$id}");
    }

    public static function getList()
    {
        
        DB::getConnection()->query('SET NAMES UTF8');

        return DB::getConnection()->query('select * from books');
    }
}