<?php

//require_once dirname(__FILE__, 2) . '/src/config/Database.php';
require_once dirname(__FILE__, 2) . '/src/config/config.php';
//require_once VIEW_PATH . '/login.php';

require_once MODEL_PATH . '/Login.php';

$login = new Login([
  'email' => 'quico@cod3r.com.br',
  'password' => 'a'
]);

try {
  $login->checkLogin();
  echo 'Logado com sucesso';
}catch (Exception $e){
  echo 'Problema no login';
}