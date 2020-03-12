<?php

namespace BrainGames\games\gcd;

function getDataGameGcd()
{
    $dataGame = [];
    for ($i = 0; $i < COUNTSETH; $i++) {
        $dataGame[] = getDataSetGcd();
    }
    return $dataGame;
}

function getDataSetGcd()
{
    $randomNumber1 = rand(0, 99);
    $randomNumber2 = rand(0, 99);
    $question = $randomNumber1 . " " . $randomNumber2;
    $correctAnswer = gcd($randomNumber1, $randomNumber2);
    return [$question, (string)$correctAnswer];
}

function gcd($numder1, $numder2) //вычисление наибольшего делителя
{
    if ($numder2 == 0) {
        return $numder1;
    }
    return gcd($numder2, $numder1 % $numder2);
}
