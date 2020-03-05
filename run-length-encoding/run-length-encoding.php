<?php

class EncodeClass
{
    function encode($input)
    {
        $inputToEncode = str_split($input);
        $a = 0;
        $b = 1;
        $c = 0;
        $sequenceMatch = 1;
        $output = [];

     

        for ($aux = 0; $aux <= sizeof($inputToEncode); $aux++) {
            if ($inputToEncode[$a] === $inputToEncode[$b]) {
                $sequenceMatch++;
                $b++;
                //$output[$c] = $sequenceMatch . $inputToEncode[$a];
            } else {
                $a = $b;
                $sequenceMatch = 1;
                //$c++;
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
