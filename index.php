<?php 
session_start();
require "config.php";
function __autoload($class){
    require_once 'lib/'.$class.'.php';
}

$loader = new Loader();

?>