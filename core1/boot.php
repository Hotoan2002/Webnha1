<?php

session_start();

//save data old

if( $_SERVER[ 'REQUEST_METHOD' ] == "POST"){
    $_SESSION[ 'old' ] = $_POST;
}

$http = "http://";

$host = $_SERVER['HTTP_HOST'];
$root = $_SERVER['DOCUMENT_ROOT'];
$dir = str_replace("\\", "/", __DIR__);


$folder = str_replace( $root, "", $dir);
$folder = str_replace("core1", "", $folder);

$web_root = $http . $host . $folder;

define( "_BASE_ROOT", $web_root);

// require_once "helper.php";
$path = str_replace("core1", "", $dir);

define( "_PATH_ROOT", $path);

require _PATH_ROOT ."core1/mysql.php";
require _PATH_ROOT ."core1/helper.php";
require _PATH_ROOT ."core1/product.php";
require _PATH_ROOT ."core1/category.php";
require _PATH_ROOT ."core1/user.php";