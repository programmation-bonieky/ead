<?php
require 'environment.php';

$config = array();

if(ENVIRONMENT == 'development') {
    define("BASE_URL", "http://bonieky.pc/ead/");
    $config['dbname'] = 'bonieky_ead';
    $config['host'] = 'bonieky.pc';
    $config['dbuser'] = 'root';
    $config['dbpass'] = '';
} else {
    define("BASE_URL", "http://meusite.com.br/");
    $config['dbname'] = 'bonieky_ead';
    $config['host'] = 'bonieky.pc';
    $config['dbuser'] = 'root';
    $config['dbpass'] = '';

}
global $db; //variavel externa para ser acessivel em todo o sistema
try {
    $db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass']);

} catch(PDOException $e) {
    echo "ERRO: ".$e->getMessage();
    exit;
}