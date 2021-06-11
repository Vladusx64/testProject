<?php

date_default_timezone_set('Europe/Kiev');

ini_set('display_errors', true);


define('MODELS_DIR', __DIR__ . '/models/');
define('CONTROLLERS_DIR', __DIR__ . '/controllers/');
define('VIEWS_DIR', __DIR__ . '/views/');
define('STORE_DIR', __DIR__ . '/store/');

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/config.php';

use App\Controllers\PictureController;

$controllerObj = new PictureController();

