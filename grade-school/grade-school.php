<?php

class School
{
    public $sR = [];
    public function add($name, $grade)
    {
        $studentRoster = [
            'name' => $name,
            'grade' => $grade
        ];
        array_push($this->sR, $studentRoster);
    }

    function studentRoster()
    {
        $result = array_map(function ($a) {
            return $a['name'];
        }, $this->sR);

        return $result;
    }

    function grade($g)
    {
        $search = array_search($g, $this->sR['grade']);
        if ($search != FALSE) {
            return $search;
        }
    }

    public function studentsByGradeAlphabetical()
    {
        return sort($this->studentName, SORT_NATURAL | SORT_FLAG_CASE);
    }
}

$s = new School();
$s->add('Abrahao', 2);
$s->add('Zaz', 2);
$s->add('Yuirim', 2);
$s->add('Teste', 2);
$s->add('Bacana', 2);
$s->add('Loretao', 2);
$s->add('XTstoso', 2);
var_dump($s->studentRoster());
