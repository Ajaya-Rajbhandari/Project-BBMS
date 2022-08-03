<?php 
    ob_start();
    session_start();

	define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'donor');

define('ERROR_LOG', $_SERVER['DOCUMENT_ROOT'].'/projectBBMS/error/error.log');

    ?>