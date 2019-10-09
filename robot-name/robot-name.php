<?php

class Robot
{
    function getName()
    {
        $a = str_split('ABCDEFGHIJKLMNOPQRSTUZXYZ');
        shuffle($a);
        $number = mt_rand(0, 9) . mt_rand(0, 9) . mt_rand(0, 9);
        $letter = '';
        foreach (array_rand($a, 2) as $v) $letter .= $a[$v];

        return $letter . $number;
    }
}

$r = new Robot();
$r->getName();
