<?php

class Robot
{
<<<<<<< HEAD
    function getName()
    {
        $a = str_split('ABCDEFGHIJKLMNOPQRSTUZXYZ');
        shuffle($a);
        $number = mt_rand(0, 9) . mt_rand(0, 9) . mt_rand(0, 9);
        $letter = '';
        foreach (array_rand($a, 2) as $v) $letter .= $a[$v];

        return $letter . $number;
=======
    private $name = null;
    private static $nameDatabase = [];

    public function __construct()
    {
        $this->reset();
    }

    public function getName()
    {
        return $this->name;
    }

    public function reset()
    {
        $n = '';

        for ($x = 0; $x < 2; $x++) {
            $n .= chr(random_int(65, 90));
        }

        for ($x = 0; $x < 3; $x++) {
            $n .= random_int(0, 9);
        }

        if (in_array($n, static::$nameDatabase)) {
            $this->reset();
        }
        static::$nameDatabase[] = $n;
        $this->name = $n;
>>>>>>> 5a67dfb20960abbdcee28e3e0e6c800ef1e51eb3
    }
}

$r = new Robot();
$r->getName();
