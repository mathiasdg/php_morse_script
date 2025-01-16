<?php

require 'src/consts.php';
require 'src/funcs.php';

it("can do basic conversion", function() {
    $this->assertEquals(".... . .-.. .-.. --- / .-- --- .-. .-.. -..", 
        text_to_morse("HELLO WORLD"));
});

it("can handle an empty string", function() {
    $this->assertEquals("", text_to_morse(""));
}
);
it("can convert a single letter", function() {
    $this->assertEquals(".-", text_to_morse("A"));
}
);
it("can handle multiple spaces", function() {
    $this->assertEquals(".... .. / - .... . .-. .", 
        text_to_morse("HI  THERE"));
});

it("can handle unknown characters", function() {
    $this->assertEquals("-- .- - .... ..", 
        text_to_morse("MATHI!123"));
});

it("can convert mixed case with numbers", function() {
    $this->assertEquals("... --- ... / ... --- ...", 
        text_to_morse("SOS 123 ! sos"));
});