<?php

class School
{

    private $studentName = [];
    private $studentGrade = [];
    private $roster = [];

    function add(string $student, int $grade)
    {
        $this->studentName[] = $student;
        $this->studentGrade[] = $grade;
        $this->roster = [
            'name' => $this->studentName,
            'grade' => $this->studentGrade
        ];
    }

    function grade(int $grade)
    {
        return $this->studentGrade[$grade];
    }

    function getStudentRoster()
    {
        if (sizeof($this->roster) > 1) {
            array_multisort(
                $this->roster['name'],
                SORT_STRING,
                $this->roster['grade']
            );
        }
        return $this->roster;
    }
}

$s = new School();
$s->add('Monteiro', 6);
$s->add('Alexandre', 2);
$s->add('Pedro', 3);
$s->add('Zambro', 4);
$s->add('Abrahao', 7);
$s->add('Silvester', 5);

var_dump($s->getStudentRoster());
