<?php
date_default_timezone_set('America/Sao_Paulo');
setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'portuguese');

// Pastas do projeto
define("MODEL_PATH", realpath(dirname(__FILE__) . '/../models'));

//Arquivo do banco de dados
require_once realpath(dirname(__FILE__)) . '/Database.php';