<?php

function squareOfSum($x)
{
    $aux = 0;
    $squareOfSum = 0;

    while ($x >= 0) {
        $squareOfSum += $aux;
        $x--;
        $aux++;
    }
    return $squareOfSum = pow($squareOfSum, 2);
}

function sumOfSquares($x)
{
    $aux = 0;
    $sumOfSquares = 0;

    while ($x >= 0) {
        $sumOfSquares = $sumOfSquares + pow($aux, 2);
        $x--;
        $aux++;
    }

    return $sumOfSquares;
}

function difference($x)
{
    return squareOfSum($x) - sumOfSquares($x);
}

echo squareOfSum(10);
echo '<br>' . sumOfSquares(10);
echo '<br>' . difference(10);
