<?php

include_once 'simple_html_dom.php';
include_once 'Product.php';




$html_1 = file_get_html('https://www.amazon.com/s/ref=nb_sb_noss_2?url=search-alias%3Daps&field-keywords=sony+xperia');
$html_2 = file_get_html('https://www.amazon.com/s/ref=sr_pg_2?fst=as%3Aon&rh=n%3A2335752011%2Ck%3Asony+xperia&page=2&keywords=sony+xperia&ie=UTF8&qid=1468310214&spIA=B01FDKVJ6U,B01FJT7ND8,B00FB379OQ');
$html_3 = file_get_html('https://www.amazon.com/s/ref=sr_pg_3?fst=as%3Aon&rh=n%3A2335752011%2Ck%3Asony+xperia&page=3&keywords=sony+xperia&ie=UTF8&qid=1468310223&spIA=B01H434YRK,B01DE4LKPM,B01H56BYU6,B01FDKVJ6U,B01FJT7ND8,B00FB379OQ');
$html_4 = file_get_html('https://www.amazon.com/s/ref=sr_pg_3?fst=as%3Aon&rh=n%3A2335752011%2Ck%3Asony+xperia&page=4&keywords=sony+xperia&ie=UTF8&qid=1468310223&spIA=B01H434YRK,B01DE4LKPM,B01H56BYU6,B01FDKVJ6U,B01FJT7ND8,B00FB379OQ');
$html_5 = file_get_html('https://www.amazon.com/s/ref=sr_pg_3?fst=as%3Aon&rh=n%3A2335752011%2Ck%3Asony+xperia&page=5&keywords=sony+xperia&ie=UTF8&qid=1468310223&spIA=B01H434YRK,B01DE4LKPM,B01H56BYU6,B01FDKVJ6U,B01FJT7ND8,B00FB379OQ');

if (isset($_POST['get'])) {
    Product::setProduct($html_1);
    Product::setProduct($html_2);
    Product::setProduct($html_3);
    Product::setProduct($html_4);
    Product::setProduct($html_5);
}

?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Parsing</title>
        <style>

            input {
                width: 100%;
                margin: 0 auto;
                font-family: "Comic Sans MS";
                font-size: 20px;
                background-color: aqua;
            }

            .wrap {
                font-size: 0;
                width: 100%;
                text-align: center;
            }
            .item {
                width: 25%;
                display: inline-block;
                box-sizing: border-box;
                font-size: 12px;
                color: black;
                vertical-align: middle;
                padding: 10px;
                margin-top: 10px;


            }
        </style>
    </head>
    <body>
        <form method="post" action="">
            <input type="submit" name="get" value="Перетянуть к себе товары с amazon.com">
        </form>
        <div class="wrap"> <?php foreach (Product::getList() as $product){?>
            <div class="item">
                <img src="<?=$product['image'];?>" alt="">
                <h3><?=$product['title'];?></h3>
                <h3><?=$product['price'];?></h3>
                <h4><?=$product['rate'];?></h4>
            </div><?php }?>
                
        </div>
    </body>
</html>

