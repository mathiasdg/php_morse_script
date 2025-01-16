<?php

require './src/consts.php';
require './src/funcs.php';
require './src/flow.php';
require './src/help.php';

if ($argc > 1) {
    control_flow($argv);
} else {
    run_program();
}