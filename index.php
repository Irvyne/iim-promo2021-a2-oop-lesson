<?php

require 'vendor/autoload.php';
require 'UserInterface.php';
require 'User.php';
require 'Admin.php';
require 'MagicMethods.php';

$user = new User();
$user
    ->setId(1)
    ->setUsername('user')
    ->setPassword('user');

$admin = new Admin();
$admin
    ->setId(2)
    ->setUsername('admin')
    ->setPassword('admin');

$admin2 = (clone $admin);

dump($admin2);