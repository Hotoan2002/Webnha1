<?php

require_once "../../fonz/boot.php";

if ( $_SERVER[ 'REQUEST_METHOD' ] === "POST" ){

}

if ($_SERVER[ 'REQUEST_METHOD' ] === "GET") {
          
    return include_once _PATH_ROOT . "./view/admin/user/_index.php";
}
