<?php

$morse = "... .- -. ---";
$input = "sano";

it('says that true is actually true and also 69', function() use ($input, $morse) {
	expect(text_to_morse($input))->toBe($morse);
});