<?php

function from(DateTime $aniversario)
{
    $aniversario = clone $aniversario;
    $gigaSecond = new DateInterval("PT1000000000S");
    echo $gigaSecond;
    return $aniversario->add($gigaSecond);
}