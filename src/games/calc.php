<?php

namespace BrainGames\games\calc;

use function BrainGames\engine\engine;

use const BrainGames\engine;

function initGameCalc()
{
    $conditionGame = 'What is the result of the expression?';
    $dataGame = [];
    while (count($dataGame) < SETS_COUNT) {
        $dataGame[] = getDataSetCalc();
    }
    engine($conditionGame, $dataGame);
    return;
}

function getDataSetCalc()
{
    $actions = ['+', '-', '*'];
    $randomAction = $actions[array_rand($actions, 1)];
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

    $question = "{$randomNumber1} {$randomAction} {$randomNumber2}";
    return [$question, (string)$correctAnswer];
}
