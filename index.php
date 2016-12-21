<?php

require(__DIR__ . '/vendor/autoload.php');

echo App\Core\Bootstrap::init(Dispatcher::getDefault());
