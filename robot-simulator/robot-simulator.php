<?php

class Robot
{
    const
        DIRECTION_NORTH = 0,
        DIRECTION_SOUTH = 1,
        DIRECTION_EAST = 2,
        DIRECTION_WEST = 3;

    public
        $direction,
        $coordinates = [0, 0];

    public function __construct(array $coordinates, string $direction)
    {
        $this->coordinates  = $coordinates;
        $this->direction = $direction;
    }

    public function advance()
    {
        switch ($this->direction) {
            case self::DIRECTION_NORTH;
                $this->coordinates[0]++;
                break;

            case self::DIRECTION_SOUTH;
                $this->position[0]--;
                break;

            case self::DIRECTION_EAST;
                $this->position[1]++;
                break;

            case self::DIRECTION_WEST;
                $this->position[1]--;
                break;
        }
    }

    public function turnLeft()
    {
        if ($this->direction > self::DIRECTION_NORTH)
            $this->direction = self::DIRECTION_WEST;
        return $this;
    }

    public function turnRight()
    {
        if ($this->direction < self::DIRECTION_WEST)
            $this->direction = self::DIRECTION_NORTH;
        return $this;
    }


    public function instruction($instructions)
    {
        $instructions = str_split($instructions);

        foreach ($instructions as $i) {
            if (preg_match('^[R,P,A,r,p,a]+$^', $i)) {
                switch ($i) {
                    case 'A':
                        $this->advance();
                        break;
                    case 'R':
                        $this->turnRight();
                        break;
                    case 'L':
                        $this->turnLeft();
                        break;
                }
            } else throw new InvalidArgumentException("Incorrect value!", 1);
        }
    }
}


$b = new Robot([7, 4], 'RABV');
$b->instruction('RAR');
var_dump($b);
