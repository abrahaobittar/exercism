<?php

class Robot
{
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
    }
}

$r = new Robot();
$r->getName();
