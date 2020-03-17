<?php

namespace BrainGames\games\even;

define("EVEN", 2);

use function BrainGames\engine\startEngine;

function getDataGameEven()
{
    $arrayDataSet1 = getDataSetEven();
    $arrayDataSet2 = getDataSetEven();
    $arrayDataSet3 = getDataSetEven();
    $result = [
        "condition" => "Answer \"yes\" if the number is even, otherwise answer \"no\".",
        ["question" => $arrayDataSet1[0], "correctAnswer" => $arrayDataSet1[1]],
        ["question" => $arrayDataSet2[0], "correctAnswer" => $arrayDataSet2[1]],
        ["question" => $arrayDataSet3[0], "correctAnswer" => $arrayDataSet3[1]]
    ];
    startEngine($result);
    return;
}

function getDataSetEven()
{
    $randomNumber = rand(0, 999);

    if ($randomNumber % EVEN == 0) {
        return [$randomNumber, 'yes'];
    }
    return [$randomNumber, 'no'];
}
