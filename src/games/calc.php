<?php

namespace BrainGames\games\calc;

function getDataGameCalc()
{
    $dataGame = [];
    for ($i = 0; $i < COUNTSETH; $i++) {
        $dataGame[] = getDataSetCalc();
    }
    return $dataGame;
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
