<?php

function isIsogram($text): bool
{
    $t = array();

    for ($x = 0; $x < strlen($text); $x++) {
        if ($text[$x] == ' ' || $text[$x] == '-') {
            continue;
        } elseif (in_array($text[$x], $t)) {
            return FALSE;
        } else {
            array_push($t, strtolower($text[$x]));
        }
    }
    return TRUE;
}

$a = isIsogram('teste');
