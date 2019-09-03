<?php

function toRna($DNA)
{
    $a = str_split($DNA);
    for ($i = 0; $i < sizeof($a); $i++) {
        switch ($a[$i]) {
            case 'G':
                $a[$i] = 'C';
                break;
            case 'C':
                $a[$i] = 'G';
                break;
            case 'T':
                $a[$i] = 'A';
                break;
            case 'A':
                $a[$i] = 'U';
                break;
        }
    }
    return implode("", $a);
}
