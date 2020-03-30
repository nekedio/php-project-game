<?php

namespace BrainGames\games\gcd;

use function BrainGames\engine\engine;

use const BrainGames\engine;

function initGameGcd()
{
    $conditionGame = 'Find the greatest common divisor of given numbers.';
    $dataGame = [];
    while (count($dataGame) < SETS_COUNT) {
        $dataGame[] = getDataSetGcd();
    }
    engine($conditionGame, $dataGame);
    return;
}

function getDataSetGcd()
{
    $numberMin = 0;
    $numberMax = 99;
    $randomNumber1 = rand($numberMin, $numberMax);
    $randomNumber2 = rand($numberMin, $numberMax);
    $question = "{$randomNumber1} {$randomNumber2}";
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
