<?php 

use Model\ActiveRecord;

require __DIR__ . '/../vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__); //extreamos la dependencia
$dotenv->safeLoad(); //llamamos al método de safeload



require 'funciones.php';
require 'database.php';
require __DIR__ . '/../vendor/autoload.php';

// Conectarnos a la base de datos

ActiveRecord::setDB($db);