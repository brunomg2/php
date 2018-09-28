<?php
require_once 'environment.php';

$config = [];

if(ENVIRONMENT == 'development'):
    define("BASE_URL","http://localhost/b7web/php-super-avancado/mvc/estrutura_mvc/");
    $config['dbname'] = 'estrutura_mvc';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'root';
    $config['dbpass'] = '';
else:
    //dados devem ser alterados de acordo com a hospedagem
    define("BASE_URL","meusite.com.br");
    $config['dbname'] = 'estrutura_mvc';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'root';
    $config['dbpass'] = '';
endif;

global $db;
try {
    $charset = [PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8'];
    $db = new PDO("mysql:dbname={$config['dbname']};host={$config['host']}", $config['dbuser'], $config['dbpass'], $charset);
}catch(PDOException $e) {
    echo "ERROR {$e->getMessage()}";
    exit;
}