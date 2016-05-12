<?php
$f = fopen("family.txt", "r");
$members = fread($f, filesize("family.txt"));
$family = unserialize($members);
require_once "list.php";
require_once "age.php";
require_once "me.php";
require_once "wife.php";
require_once "age1.php";
require_once "whois.php";
require_once "newchild.php";

