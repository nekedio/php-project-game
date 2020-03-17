<?php

namespace BrainGames\games\prime;

use function BrainGames\engine\startEngine;

function getDataGamePrime()
{
    $arrayDataSet1 = getDataSetPrime();
    $arrayDataSet2 = getDataSetPrime();
    $arrayDataSet3 = getDataSetPrime();
    $result = [
        "condition" => "Answer \"yes\" if given number is prime. Otherwise answer \"no\".",
        ["question" => $arrayDataSet1[0], "correctAnswer" => $arrayDataSet1[1]],
        ["question" => $arrayDataSet2[0], "correctAnswer" => $arrayDataSet2[1]],
        ["question" => $arrayDataSet3[0], "correctAnswer" => $arrayDataSet3[1]]
    ];
    startEngine($result);
    return;
}

function getDataSetPrime()
{
    $question = rand(0, 99);
    if ($question == 0 || $question == 1) {
        return [$question, 'no'];
    }
    $i = round($question / 2, 0);
    while ($i > 1) {
        if ($question % $i == 0) {
            return [$question, 'no'];
        }
        $i--;
    }
    return [$question, 'yes'];
}
