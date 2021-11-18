<?php

//require_once dirname(__FILE__, 2) . '/src/config/Database.php';
require_once dirname(__FILE__, 2) . '/src/config/config.php';
require_once dirname(__FILE__, 2) . '/src/models/User.php';

$user = new User(['name' => 'Iara', 'email' => 'iara@gmail.com']);

$q = User::getResultSetFromSelect(['id' => 1], 'name, email');

var_dump(User::get(['name' => 'Chaves'], 'id, name, email'));

foreach (User::get([], 'name') as $user) {
  echo $user->name . '<br>';
}
