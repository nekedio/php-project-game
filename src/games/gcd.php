<?php

namespace BrainGames\games\gcd;

use function BrainGames\engine\startEngine;

function getDataGameGcd()
{
    $conditionGames = 'Find the greatest common divisor of given numbers.';
    $dataGame = [];
    while (count($dataGame) < COUNT_SETH) {
        $dataGame[] = getDataSetGcd();
    }
    startEngine($conditionGames, $dataGame);
    return;
}

function getDataSetGcd()
{
    $randomNumberMin = 0;
    $randomNumberMax = 99;
    $randomNumber1 = rand($randomNumberMin, $randomNumberMax);
    $randomNumber2 = rand($randomNumberMin, $randomNumberMax);
    $question = $randomNumber1 . " " . $randomNumber2;
    $correctAnswer = getGcd($randomNumber1, $randomNumber2);
    return [$question, (string)$correctAnswer];
}

function getGcd($numder1, $numder2) //вычисление наибольшего делителя
{
    if ($numder2 == 0) {
        return $numder1;
    }
    return getGcd($numder2, $numder1 % $numder2);
}
