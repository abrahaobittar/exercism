<?php

class School
{
    function add($studentName, $grade)
    {
        $students = [
            $studentName => $grade
        ];

        return $students;
    }
}
