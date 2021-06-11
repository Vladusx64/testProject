<?php

date_default_timezone_set('Europe/Kiev');

ini_set('display_errors', true);

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/config.php';

use App\Controllers\PictureController;

$controllerObj = new PictureController();

