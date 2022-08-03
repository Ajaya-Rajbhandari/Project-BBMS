<?php 
// echo $_SERVER['DOCUMENT_ROOT'];
// die;
    require_once $_SERVER['DOCUMENT_ROOT'].'/projectBBMS/config/config.php';

    require_once $_SERVER['DOCUMENT_ROOT'].'/projectBBMS/config/functions.php';


    spl_autoload_register(function($class_name){
        require_once $_SERVER['DOCUMENT_ROOT'].'/projectBBMS/class/'.$class_name.".php";
    });