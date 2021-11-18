<?php

//require_once dirname(__FILE__, 2) . '/src/config/Database.php';
require_once dirname(__FILE__, 2) . '/src/config/config.php';
require_once dirname(__FILE__, 2) . '/src/models/User.php';

$user = new User(['name' => 'Iara', 'email' => 'iara@gmail.com']);

$user->email = 'freerico@email.com';

var_dump($user->email);