<?php

defined('ROOT_PATH')? null: define('ROOT_PATH', getcwd());
defined('APP_PATH')? null: define('APP_PATH', __DIR__);
defined('DS')? null: define('DS', DIRECTORY_SEPARATOR);

require_once(APP_PATH.DS.'core/Router.php');
require_once(APP_PATH.DS.'core/Bootstrap.php');
require_once(ROOT_PATH.DS.'vendor/autoload.php');