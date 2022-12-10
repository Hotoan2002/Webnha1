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
$folder = str_replace("fonz", "", $folder);

$web_root = $http . $host . $folder;

define( "_BASE_ROOT", $web_root);

// require_once "helper.php";
$path = str_replace("fonz", "", $dir);

define( "_PATH_ROOT", $path);

require _PATH_ROOT ."fonz/mysql.php";
require _PATH_ROOT ."fonz/helper.php";
require _PATH_ROOT ."fonz/product.php";
require _PATH_ROOT ."fonz/category.php";
require _PATH_ROOT ."fonz/user.php";