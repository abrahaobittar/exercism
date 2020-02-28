<?php

class EncodeClass
{
    function encode($input)
    {
        $inputToEncode = str_split($input);
        $a = 0;
        $b = 0;
        $c = 0;
        $sequenceMatch = 0;
        $output = [];

        for ($aux = 0; $aux <= sizeof($inputToEncode); $aux++) {
            if ($inputToEncode[$a] === $inputToEncode[$b]) {
                ++$b;
                $sequenceMatch++;
                $output[$c] = $sequenceMatch . $inputToEncode[$a];
            } else {
                $a = $b;
                $sequenceMatch = 0;
                $c++;
            }

            if (end($inputToEncode) === $inputToEncode[$b]) {
                $sequenceMatch = 1;
                $output[$c] = $sequenceMatch . $inputToEncode[$a];
            }
        }

        return $output;
    }
}

$e = new EncodeClass();
var_dump($e->encode('aaaawwg'));
