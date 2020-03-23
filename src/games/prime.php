<?php

namespace BrainGames\games\prime;

use function BrainGames\engine\startEngine;

function getDataGamePrime()
{
    $conditionGame = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    $dataGame = [];
    while (count($dataGame) < COUNT_SETH) {
        $dataGame[] = getDataSetPrime();
    }
    startEngine($conditionGame, $dataGame);
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
    if ($number == 0 || $number == 1) {
        return false;
    }
    $i = round($number / 2, 0);
    while ($i > 1) {
        if ($number % $i == 0) {
            return false;
        }
        $i--;
    }
    return true;
}
