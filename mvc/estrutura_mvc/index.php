<?php
session_start();
require_once 'config.php';
spl_autoload_register(function($class){
    $directories = ['controllers','core','models'];
    foreach($directories as $directory):
        if(file_exists("{$directory}/{$class}.class.php") && !is_dir("{$directory}/{$class}.class.php")):
            require_once "{$directory}/{$class}.class.php";
        endif;
    endforeach;
});

$core = new Core;
$core->run();