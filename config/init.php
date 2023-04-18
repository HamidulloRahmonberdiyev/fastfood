<?php

define("DEBUG", 1);
define("ROOT", dirname(__DIR__));
define("WWW", ROOT . '/public');
define("APP", ROOT . '/app');
define("CORE", ROOT . '/vendor/myshop/core');
define("LIBS", ROOT . '/vendor/myshop/core/libs');             
define("CACHE", ROOT . '/tmp/cache');             
define("CONF", ROOT . '/config');             
define("LAYOUT", 'watches');             

//  http://myshop.uz/public/index.php
$app_path = "http://{$_SERVER['HTTP_HOST']}{$_SERVER['PHP_SELF']}";

//  http://myshop.uz/public/
$app_path = preg_replace("#[^/]+$#", '', $app_path);

//  http://myshop.uz/
$app_path = str_replace('/public/', '', $app_path); 

define("PATH", $app_path);
define("ADMIN", PATH . '/admin');

require_once ROOT . '/vendor/autoload.php';