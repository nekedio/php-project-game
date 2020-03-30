<?php

namespace BrainGames\games\prime;

use function BrainGames\engine\engine;

use const BrainGames\engine;

function initGamePrime()
{
    $conditionGame = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    $dataGame = [];
    while (count($dataGame) < SETS_COUNT) {
        $dataGame[] = getDataSetPrime();
    }
    engine($conditionGame, $dataGame);
    return;
}

function getDataSetPrime()
{
    $randomNumberMin = 0;
    $randomNumberMax = 99;
    $question = rand($randomNumberMin, $randomNumberMax);
    $correctAnswer = isPrimeNumber($question) ? 'yes' : 'no';
    return [$question, $correctAnswer];
}

function isPrimeNumber($number)
{
    if ($number < 1) {
        return false;
    }
    $end = round($number / 2, 0);
    $i = 2;
    while ($i < $end) {
        if ($number % $i == 0) {
            return false;
        }
        $i++;
    }
    return true;
}
