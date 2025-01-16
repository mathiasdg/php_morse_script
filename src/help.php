<?php

function print_help(): void {
    echo " " . PHP_EOL;
    echo " :: Welkom bij Mathi's morse (de)coder ::" . PHP_EOL;
    echo " " . PHP_EOL;
    echo " Dit zijn de beschikbare opties:" . PHP_EOL;
    echo ":: -e\tprompt voor te coderen string" . PHP_EOL;
    echo "\t(of --encode)" . PHP_EOL;
    echo ":: -e [string] " . PHP_EOL;
    echo "\t opgegeven 'string' rechtstreeks coderen " . PHP_EOL;
    echo ":: -d\tprompt voor te decoderen morse" . PHP_EOL;
    echo "\t(of --decode)" . PHP_EOL;
    echo ":: -d [morse string] " . PHP_EOL;
    echo "\t opgegeven 'morse string' rechtstreeks decoderen " . PHP_EOL;
    echo " " . PHP_EOL;
    echo "\t (morse code moet tussen aanhalingstekens voor een juist resultaat " . PHP_EOL;
    echo "\t morse code moet in formaat: " . PHP_EOL;
    echo "\t . voor kort " . PHP_EOL;
    echo "\t - voor lang " . PHP_EOL;
    echo "\t (spatie) tussen letters " . PHP_EOL;
    echo "\t / tussen woorden " . PHP_EOL;
    echo " " . PHP_EOL;
    echo ":: -v\tgeeft de versie van dit script weer" . PHP_EOL;
    echo "\t(of --version)" . PHP_EOL;
    echo ":: -h\tgeeft deze help pagina weer" . PHP_EOL;
    echo "\t(of --help)" . PHP_EOL;
    echo " " . PHP_EOL;

    exit();
}