<?php

use AulaComposer\Soma;
use AulaComposer\Graficos\Donnut;

require 'vendor/autoload.php';

if (file_exists('.env')) {
    $dotenv = Dotenv\Dotenv::create(__DIR__);
    $dotenv->load();
}

$soma = new Soma();
$donnut = new Donnut();