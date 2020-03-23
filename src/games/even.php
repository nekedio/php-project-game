<?php

namespace BrainGames\games\even;

define("EVEN", 2);

use function BrainGames\engine\startEngine;

function getDataGameEven()
{
    $conditionGames = 'Answer "yes" if the number is even, otherwise answer "no".';
    $dataGame = [];
    while (count($dataGame) < COUNT_SETH) {
        $dataGame[] = getDataSetEven();
    }
    startEngine($conditionGames, $dataGame);
    return;
}

function getDataSetEven()
{
    $randomNumberMin = 0;
    $randomNumberMax = 999;
    $randomNumber = rand($randomNumberMin, $randomNumberMax);

    if ($randomNumber % EVEN == 0) {
        return [$randomNumber, 'yes'];
    }
    return [$randomNumber, 'no'];
}
