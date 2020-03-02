<?php

class EncodeClass
{
    function encode(string $input)
    {
        $a = 0;
        $b = 1;
        $c = 0;
        $count = 1;
        $inputToEncode = str_split($input);

        for ($aux = 0; $aux <= sizeof($inputToEncode); $aux++) {
            if ($inputToEncode[$a] === $inputToEncode[$b]) {
                $input[$c] = [$count . $inputToEncode[$a]];
                $count++;
                $b++;
            } else {
                $input = [$count . $inputToEncode[$a]];
                $a = $b;
                $count = 1;
            }
        }
    }
}

$e = new EncodeClass();
$e->encode('atee');
