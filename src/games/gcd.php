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

function gcd($numder1, $numder2) //вычисление наибольшего делителя
{
    if ($numder2 == 0) {
        return $numder1;
    }
    return gcd($numder2, $numder1 % $numder2);
}
