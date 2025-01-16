<?php

require_once __DIR__ . '/vendor/autoload.php';
require_once './src/consts.php';
require_once './src/funcs.php';
require_once './src/flow.php';
require_once './src/help.php';

if ($argc > 1) {
    control_flow($argv);
} else {
    run_program();
}

echo PHP_EOL;