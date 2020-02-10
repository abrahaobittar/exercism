<?php

class Robot
{
    const DIRECTION_NORTH = 0;
    const DIRECTION_EAST = 1;
    const DIRECTION_SOUTH = 2;
    const DIRECTION_WEST = 3;

    public $direction = 0;
    public $position = [];

    public function __construct(array $position, string $direction)
    {
        $this->direction = $direction;
        $this->position = $position;
    }

    public function advance()
    {
        switch ($this->direction) {
            case 0;
                $this->position[1]++;
                break;

            case 1;
                $this->position[0]++;
                break;

            case 2;
                $this->position[1]--;
                break;

            case 3;
                $this->position[0]--;
                break;
        }
        return $this;
    }

    public function turnLeft()
    {
        if ($this->direction == self::DIRECTION_NORTH)
            $this->direction = 3;
        else {
            $this->direction--;
        }
        return $this;
    }

    public function turnRight()
    {
        if ($this->direction == self::DIRECTION_WEST)
            $this->direction = 0;
        else {
            $this->direction++;
        }
        return $this;
    }


    public function instructions(string $instructions)
    {
        if (preg_match('/[^LRA]/', $instructions)) {
            throw new InvalidArgumentException();
        }

        $instructions = str_split($instructions);

        foreach ($instructions as $i) {
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
        }
        return $this;
    }
}
