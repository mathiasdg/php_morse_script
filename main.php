<?php

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/src/consts.php';
require_once __DIR__ . '/src/flow.php';
require_once __DIR__ . '/src/funcs.php';
require_once __DIR__ . '/src/help.php';

if ($argc > 1) {
    control_flow($argv);
} else {
    run_program();
}

echo PHP_EOL;