<?php
function control_flow(array $argv) {

    if ($argv[1] === '--help' || $argv[1] === '-h') {
        print_help();
    } else if ($argv[1] === '--version' || $argv[1] === '-v') {
        print_version();
    } else if ($argv[1] === '--encode' || $argv[1] === '-e') {
        if (isset($argv[2]) ) {
            $msg = implode(" ", array_slice($argv, 2) );
            
            echo text_to_morse($msg);
        } else {
            run_program('e');
        }
    } else if ($argv[1] === '--decode' || $argv[1] === '-d') {
        if (count($argv) > 3) {
            echo "Gebruik aanhalingstekens rondom je morse code!" . PHP_EOL;
        } else if (isset($argv[2]) ) {
            echo morse_to_text($argv[2]);
        } else {
            run_program('d');
        }
    } else {
        echo " {$argv[1]} is geen geldige parameter! Gebruik '-h' om de help pagina weer te geven." . PHP_EOL;
        echo "Of gebruik het script zonder parameters voor de vraag modus" . PHP_EOL;
    }
}