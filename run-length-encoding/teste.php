<?php

class EncodeClass
{
    function encode($input)
    {
        $a = 0;
        $b = 0;
        $c = 0;
        $aux = 0;
        $count = 1;
        $inputToEncode = str_split($input);
        $input = [];
        /*         do {
            $input[$c] = [$count . $inputToEncode[$a]];
            $c++;
            $aux++;
            $a++;
        } while ($aux <= sizeof($inputToEncode)); */
        foreach ($inputToEncode as $i => $value) {
            echo $value;
        }

        while ($aux <= sizeof($inputToEncode)) {
            if ($inputToEncode[$a] === $inputToEncode[$b]) {
                $input[$c] = [$count . $inputToEncode[$a]];
                $count++;
                $b++;
            } else {
                $count = 1;
                $c++;
                $a++;
            }
            if (key($inputToEncode)  == NULL) {
                $aux--;
            }
            $aux++;
        }
        return $input;
    }
}

$e = new EncodeClass();
var_dump($e->encode('atee'));
