<?php
/**
 * Handles the control flow of the command-line application.
 *
 * This function is responsible for parsing the command-line arguments and
 * executing the appropriate functionality based on the provided arguments.
 *
 * @param array $argv The command-line arguments.
 */
function control_flow(array $argv) {

    switch ($argv[1]) {
        case '--help':
        case '-h':
            print_help();
            break;
        case '--version':
        case '-v':
            print_version();
            break;
        case '--encode':
        case '-e':
            if (isset($argv[2])) {
                $msg = implode(" ", array_slice($argv, 2));
                echo text_to_morse($msg);
            } else {
                run_program('e');
            }
            break;
        case '--decode':
        case '-d':
            if (count($argv) > 3) {
                echo "Gebruik aanhalingstekens rondom je morse code!" . PHP_EOL;
            } else if (isset($argv[2])) {
                echo morse_to_text($argv[2]);
            } else {
                run_program('d');
            }
            break;
        default:
            echo " {$argv[1]} is geen geldige parameter! Gebruik '-h' om de help pagina weer te geven." . PHP_EOL;
            echo "Of gebruik het script zonder parameters voor de prompt modus" . PHP_EOL;
            break;
    }

}