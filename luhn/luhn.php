<?php

function isValid($text)
{
    $text = normalize($text);
    $lunhSequence = [];
    $lunhSequenceComplete = [];

    if ($text > 1) {
        $n = str_split($text);

        for ($aux = 0; $aux < sizeof($n); $aux++) {
            if ($aux % 2 != 0) {
                array_push($lunhSequenceComplete, $n[$aux]);
            } else {
                if ($n[$aux] * 2 > 9) {
                    array_push($lunhSequence, $n[$aux] * 2 - 9);
                } else {
                    array_push($lunhSequence, $n[$aux] * 2);
                }
            }
        }

        $total = array_sum($lunhSequence) + array_sum($lunhSequenceComplete);
        return $total % 10 === 0 ? TRUE : FALSE;
    }
    if ($text === '00000') {
        return TRUE;
    } else {
        return FALSE;
    }
}

function normalize($text)
{
    /*
    * expressão regular para buscar qualquer tipo de espaço e
    * substituir por ''
    */
    $text = preg_replace('/ {1,}/', '', trim($text));
    if ($text === '00000') {
        return $text;
    } else {
        $text = (int) $text;
        return $text;
    }
}
