<?php
function distance(string $strandA, string $strandB): int
{
    $size = 0;
    $d1 = str_split($strandA);
    $d2 = str_split($strandB);

    $dnaSize = (sizeof($d1)+sizeof($d2))/2;

    if(sizeof($d1) !== sizeof($d2)) {
        throw new InvalidArgumentException('DNA strands must be of equal length.');
    } else {
        for($aux=0; $aux < $dnaSize; $aux++) {
            if ($d1[$aux] !== $d2[$aux]) {
                echo 'Estou comparando: ' . $d1[$aux] . ' com: ' . $d2[$aux] . '<br>';
                $size++;
            }
        }
        return $size;
    }
}
