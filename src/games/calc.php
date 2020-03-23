<?php

namespace BrainGames\games\calc;

use function BrainGames\engine\startEngine;

function getDataGameCalc()
{
    $conditionGames = 'What is the result of the expression?';
    $dataGame = [];
    while (count($dataGame) < COUNT_SETH) {
        $dataGame[] = getDataSetCalc();
    }
    startEngine($conditionGames, $dataGame);
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
