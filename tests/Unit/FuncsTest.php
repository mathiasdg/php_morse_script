<?php

use PHPUnit\Framework\TestCase;

require 'src/consts.php';
require 'src/funcs.php';

class FuncsTest extends TestCase {
    private $morse_map;

    protected function setUp(): void {
        global $morse_map;
        $morse_map = MORSE_MAP;
    }

    public function testBasicConversion() {
        $this->assertEquals(".... . .-.. .-.. --- / .-- --- .-. .-.. -..", 
            text_to_morse("HELLO WORLD"));
    }

    public function testEmptyString() {
        $this->assertEquals("", text_to_morse(""));
    }

    public function testSingleLetter() {
        $this->assertEquals(".-", text_to_morse("A"));
    }

    public function testMultipleSpaces() {
        $this->assertEquals(".... .. / - .... . .-. .", 
            text_to_morse("HI  THERE"));
    }

    public function testUnknownCharacters() {
        $this->assertEquals("-- .- - .... ..", 
            text_to_morse("MATHI!123"));
    }

    public function testMixedCaseWithNumbers() {
        $this->assertEquals("... --- ... / ... --- ...", 
            text_to_morse("SOS 123 ! sos"));
    }
}