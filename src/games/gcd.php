<?php

namespace BrainGames\games\gcd;

function runGcd()
{
    $randomNumber1 = rand(0, 99);
    $randomNumber2 = rand(0, 99);
    $expression = $randomNumber1 . " " . $randomNumber2;
    $correctAnswer = gcd($randomNumber1, $randomNumber2);
    return [$expression, (string)$correctAnswer];
}

function gcd($n1, $n2)
{
    if ($n2 == 0) {
        return $n1;
    }
    return gcd($n2, $n1 % $n2);
}
