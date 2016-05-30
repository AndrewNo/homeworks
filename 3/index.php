<?php
require_once 'user.php';

$user = getUser();
requiredUser($user);

$section = 'welcome';
if (!empty($_GET['section'])){
    if (file_exists($_GET['section'].'.php')){
        $section = $_GET['section'];
    }
}

ob_start();
require_once 'head.php';
$head = ob_get_clean();
ob_start();
require_once 'menu.php';
$menu = ob_get_clean();
ob_start();
require_once 'footer.php';
$footer = ob_get_clean();
ob_start();
require_once $section.'.php';
$content = ob_get_clean();

$settings = getSettings();

$a_color = (isset($settings['a_color'])? $settings['a_color'] : 'green');
$width = (isset($settings['width'])? $settings['width'] : 30);

?>

<!DOCTYPE html>
<html>
    <header>
        <title>Hi <?=$user['name']?></title>
    </header>
    <body>
    <style>
        body {
            padding: 0;
            margin: 0;
        }
        a {
            color: <?php echo $a_color?>;
            text-decoration: none;
        }
        a:hover{
            text-decoration: underline;
        }
        .head, .footer {
            padding: 10px 5px;
            background-color: #f2f2f2;
            text-align: right;
         }
        .head {
            height: 100px;
        }
        .footer{
            text-align: center;
            clear: both;
        }
        .menu {
            float: left;
            width: <?=$width?>%;
            clear: both;

        }
        .content {
            float: left;
            width: <?= 100 - $width?>%;
        }
        img {
            height: 80px;
            float: left;

        }
    </style>
    <div class="head"><?=$head?></div>
    <div class="menu"><?=$menu?></div>
    <div class="content"><?=$content?></div>
    <div class="footer"><?=$footer?></div>
    </body>

</html>

