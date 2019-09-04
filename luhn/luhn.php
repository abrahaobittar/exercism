<?php

function isValid($text)
{
    $text = normalize($text);
    $lunhSequence = [];
    $lunhSequenceComplete = [];

    if ($text > 1) {
        $n = str_split($text);

        for ($aux = 0; $aux < sizeof($n); $aux++) {
            if ($aux % 2 != 0) {
                array_push($lunhSequenceComplete, $n[$aux]);
            } else {
                if ($n[$aux] * 2 > 9) {
                    array_push($lunhSequence, $n[$aux] * 2 - 9);
                } else {
                    array_push($lunhSequence, $n[$aux] * 2);
                }
            }
        }

        /* for ($aux = 0; $aux < sizeof($n); $aux += 2) {
            if ($n[$aux] * 2 > 9) {
                array_push($lunhSequence, $n[$aux] * 2 - 9);
            } else {
                array_push($lunhSequence, $n[$aux] * 2);
            }
        }
        */

        $total = array_sum($lunhSequence) + array_sum($lunhSequenceComplete);

        return $total % 10 === 0 ? 'valido' : 'invalido';
    }
}

function normalize($text)
{
    /*
    * expressão regular para buscar qualquer tipo de espaço e
    * substituir por ''
    */
    $text = preg_replace('/ {1,}/', '', trim($text));
    $text = (int) $text;
    return $text;
}

echo 'Digito Zero <br>';
$a = isValid('0');
echo $a . '<br>';

echo 'Cartão de crédito válido: 4539 1488 0343 6467 <br>';
$a = isValid('4539 1488 0343 6467');
echo $a . '<br>';

echo '<br>';

echo 'Cartão de crédito inválido: 8273 1232 7352 0569 <br>';
$a = isValid('8273 1232 7352 0569');
echo $a . '<br>';

echo 'Digito Unico <br>';
$a = isValid('8');
echo $a . '<br>';

echo 'Digito Duplo Espaçado <br>';
$a = isValid(' 8 8 ');
echo $a . '<br>';

echo 'Digito com Simp <br>';
$a = isValid('8');
echo $a . '<br>';

echo 'Digito com Letras no meio <br>';
$a = isValid('8aaa 123 1 asd bb444');
echo $a . '<br>';
