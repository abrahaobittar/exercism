<?php

function LuhnValidatorTest($text)
{
    $text = normalize($text);

    $lunhSequence = array();
    //exemplo: 4539 1488 0343 6467
    //if (is_numeric($text) == TRUE && $text > 1) {
    if (normalize($text) > 1) {
        $n = str_split($text);
        $n = array_reverse($n, false);

        for ($aux = 0; $aux < sizeof($n); $aux += 2) {
            $lunhSequence[$aux] = $n[$aux] * 1;

            /*             if ($lunhSequence[$aux] > 9) {
                $lunhSequence[$aux] -= 9;
            } */
        }
    }
    return $lunhSequence;
}

function normalize($text)
{
    $text = preg_replace('/ {1,}/', '', trim($text));
    $text = (int) $text;
    return $text;
}

$a = LuhnValidatorTest(' 4 539 14 8 8 0 343 6 467  ');
var_dump($a);
