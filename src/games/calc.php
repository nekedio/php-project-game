<?php

namespace BrainGames\games\calc;

function runCalc()
{
    $arrayAction = ['+', '-', '*'];
    $randomNumber1 = rand(0, 9);
    $randomNumberAction = $arrayAction[mt_rand(0, 2)];
    $randomNumber2 = rand(0, 9);

    if ($randomNumberAction == '*') {
        $correctResult = $randomNumber1 * $randomNumber2;
    } elseif ($randomNumberAction == '+') {
        $correctResult = $randomNumber1 + $randomNumber2;
    } else {
        $correctResult = $randomNumber1 - $randomNumber2;
    }

    $expression = $randomNumber1 . " " . $randomNumberAction . " " . $randomNumber2;
    return [$expression, (string)$correctResult];
}
