<?php

require 'vendor/autoload.php';
require 'SessionHandlerInterface2.php';
require 'PHPSessionHandler.php';

$session = new RedisSessionHandler();

$session->set('id', 8);
$session->set('name', 'ezfljknzelf');

echo '<h1>'.$session->get('name').'</h1>';
