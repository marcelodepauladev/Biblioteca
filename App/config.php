<?php

// Primeiro - diretorio base
// Segundo - diretorio das views
// Terceiro - Acesso ao db


define('BASE_DIR', dirname(__FILE__, 2));
define('VIEWS', BASE_DIR . '/View');

//$_ENV eh uma variavel ded ambiente, mas existem maneiras melhoras de guardar o usuario e senha
//sendo bem mais ou menos deixar assim

$_ENV['db']['host'] = "localhost:3306";
$_ENV['db']['user'] = "root";
$_ENV['db']['pass'] = "Marcelo@2025";
$_ENV['db']['database'] = "biblioteca";