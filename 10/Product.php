<?php
include_once 'simple_html_dom.php';
include_once "DB.php";
const HOST = 'localhost';
const USER = 'root';
const PASSWORD = '';
const DB_NAME = 'sony';

class Product
{
    public static $title = 'Название не указано';
    public static $price = '$0.00';
    public static $image = 'Изображение остутствует';
    public static $rate = '0 out of 5 stars';

    public static function getData($html)
    {
        $number = 1;
        $current_number = 0;
        $data = array('item ' . $number => [
            'title' => '',
            'price' => '',
            'image' => '',
            'rate' => '']
        );
        foreach ($html->find('ul') as $ul) {
            foreach ($ul->find('li .s-item-container') as $li) {
                $current_number += $number;
                foreach ($li->find('h2') as $title) {
                    $data['item ' . $current_number]['title'] = $title->plaintext;
                }
                foreach ($li->find('.s-price') as $price) {
                    $data['item ' . $current_number]['price'] = $price->plaintext;
                }
                foreach ($li->find('img') as $image) {
                    $data['item ' . $current_number]['image'] = $image->src;
                }
                foreach ($li->find('span .a-icon-alt') as $rate) {
                    $data['item ' . $current_number]['rate'] = $rate->plaintext;
                }

            }
        }

        return $data;
    }

    public static function setProduct($html)
    {
        foreach (Product::getData($html) as $product => $item) {
            if (!isset($item['title'])){
                $item['title'] = self::$title;
            }
            if (!isset($item['price'])){
                $item['price'] = self::$price;
            }
            if (!isset($item['image'])){
                $item['image'] = self::$image;
            }
            if (!isset($item['rate'])){
                $item['rate'] = self::$rate;
            }
            $product = $item;
            Product::add($product);

        }
    }

    public static function add($data)
    {

        DB::getConnection()->query('SET NAMES UTF8');

        // Осторожно!
        $title = DB::getConnection()->escape($data['title']);
        $price = DB::getConnection()->escape($data['price']);
        $image = DB::getConnection()->escape($data['image']);
        $rate = DB::getConnection()->escape($data['rate']);

        return DB::getConnection()->query(
            "insert into xperia 
				set title = '{$title}',
					price = '{$price}',
					image = '{$image}',
					rate = '{$rate}'
			");

    }

    public static function getList()
    {

        DB::getConnection()->query('SET NAMES UTF8');

        return DB::getConnection()->query('select * from xperia');
    }
}