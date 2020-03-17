<?php

namespace BrainGames\games\calc;

use function BrainGames\engine\startEngine;

function getDataGameCalc()
{
    $arrayDataSet1 = getDataSetCalc();
    $arrayDataSet2 = getDataSetCalc();
    $arrayDataSet3 = getDataSetCalc();
    $result = [
        "condition" => "Answer \"yes\" if the number is even, otherwise answer \"no\".",
        ["question" => $arrayDataSet1[0], "correctAnswer" => $arrayDataSet1[1]],
        ["question" => $arrayDataSet2[0], "correctAnswer" => $arrayDataSet2[1]],
        ["question" => $arrayDataSet3[0], "correctAnswer" => $arrayDataSet3[1]]
    ];
    startEngine($result);
    return;
}

function getDataSetCalc()
{
    $arrayAction = ['+', '-', '*'];
    $randomAction = $arrayAction[array_rand($arrayAction, 1)];
    $randomNumber1 = rand(0, 9);
    $randomNumber2 = rand(0, 9);

    switch ($randomAction) {
        case '*':
            $correctAnswer = $randomNumber1 * $randomNumber2;
            break;
        case '+':
            $correctAnswer = $randomNumber1 + $randomNumber2;
            break;
        case '-':
            $correctAnswer = $randomNumber1 - $randomNumber2;
            break;
    }

    $question = $randomNumber1 . " " . $randomAction . " " . $randomNumber2;
    return [$question, (string)$correctAnswer];
}
