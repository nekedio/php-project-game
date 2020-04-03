<?php

namespace BrainGames\games\even;

use function BrainGames\engine\engine;

use const BrainGames\engine\SETS_COUNT;

function initGameEven()
{
    $conditionGame = 'Answer "yes" if the number is even, otherwise answer "no".';
    $dataGame = [];
    while (count($dataGame) < SETS_COUNT) {
        $dataGame[] = getDataSetEven();
    }
    engine($conditionGame, $dataGame);
    return;
}

function getDataSetEven()
{
    $randomNumberMin = 0;
    $randomNumberMax = 999;
    $question = rand($randomNumberMin, $randomNumberMax);
    $correctAnswer = isEvenNumber($question) ? 'yes' : 'no';
    return [$question, $correctAnswer];
}

function isEvenNumber($number)
{
    return $number % 2 === 0;
}
