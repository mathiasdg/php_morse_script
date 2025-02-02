<?php

use function Laravel\Prompts\select;
use function Laravel\Prompts\text;

/**
 * Runs a program that allows the user to encode a string to Morse code or decode Morse code to text.
 *
 * The program prompts the user to choose whether they want to encode or decode, then reads the input from the user and
 * calls the appropriate function to perform the conversion. If the user enters an invalid choice, an error message is
 * printed and the program exits.
 * 
 * @param string $args (optional) the arguments to take shortcuts in the program, if none given the program executes with prompts from start
 * 
 */
function run_program($args = null): void {
    
    $direction = null;
    
    if (!$args) {
        while ($direction !== "e" && $direction !== "d") {
            $direction = select("Wil je een string coderen of een morsecode decoderen?", ['e' => 'coderen', 'd' => 'decoderen']);
        }
    } else {
        $direction = $args;
    }
        
    if ($direction === "e") {
        $input = text(
            "Geef een string om morsig te maken:",
            "typ maar hoor"
    );
        echo text_to_morse($input);

    } else if ($direction === "d") {
        $input = text(
            "Geef een morsecode om te ontcijferen:",
            "- -.-- .--. / -- .- .- .-. / .... --- --- .-.",
            hint: ". voor kort - voor lang (spatie) tussen letters / tussen woorden ",
        );
        echo morse_to_text($input);
        
    } else {
        echo "er ging iets mis!" . PHP_EOL;
        exit();
    }
}

/**
 * Converts a string of Morse code to its text equivalent.
 *
 * @param string $input The input string of Morse code.
 * @return string The text equivalent of the input Morse code.
 */
function morse_to_text(string $input): string {
    $morse_map = MORSE_MAP;
    $words = [];

    $morse_words = explode("/", $input);

    foreach ($morse_words as $morse_word) {
        $morse_letters = explode(" ", trim($morse_word));

        $letters = [];

        foreach ($morse_letters as $morse_letter) {
            $key = array_search($morse_letter, $morse_map);
            if ($key)
                array_push($letters, $key);
	    else
                array_push($letters, "#");
        }
        array_push($words, implode("", $letters));
    }

    return implode(" ", $words);
}

/**
 * Converts a string of text characters to their Morse code equivalent.
 *
 * @param string $input The input string of text characters to be converted to Morse code.
 * @return string The Morse code equivalent of the input text string.
 */
function text_to_morse(string $input): string {
    $morse_map = MORSE_MAP;
    $morse_words = [];
    
    $words = array_filter( explode(" ", $input) );

    foreach ($words as $word) {
        $letters = str_split(strtoupper(trim($word)));

        $morse_letters = [];

        foreach ($letters as $letter) {
            if (isset($morse_map[$letter])) {
                array_push($morse_letters, $morse_map[$letter] );
            }
        }
        array_push($morse_words, implode(" ", $morse_letters));
    }

    return implode(" / ", array_filter($morse_words) );
}

function print_version(): void {
    echo "Mathi's morse (de)coder" . PHP_EOL;
    echo ":: versie :: " . VERSION . PHP_EOL;

    exit();
}