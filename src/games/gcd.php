<?php

namespace BrainGames\games\gcd;

use function BrainGames\engine\startEngine;

function getDataGameGcd()
{
    $arrayDataSet1 = getDataSetGcd();
    $arrayDataSet2 = getDataSetGcd();
    $arrayDataSet3 = getDataSetGcd();
    $result = [
        "condition" => "Find the greatest common divisor of given numbers.",
        ["question" => $arrayDataSet1[0], "correctAnswer" => $arrayDataSet1[1]],
        ["question" => $arrayDataSet2[0], "correctAnswer" => $arrayDataSet2[1]],
        ["question" => $arrayDataSet3[0], "correctAnswer" => $arrayDataSet3[1]]
    ];
    startEngine($result);
    return;
}

function getDataSetGcd()
{
    $randomNumber1 = rand(0, 99);
    $randomNumber2 = rand(0, 99);
    $question = $randomNumber1 . " " . $randomNumber2;
    $correctAnswer = gcd($randomNumber1, $randomNumber2);
    return [$question, (string)$correctAnswer];
}

function gcd($numder1, $numder2) //вычисление наибольшего делителя
{
    if ($numder2 == 0) {
        return $numder1;
    }
    return gcd($numder2, $numder1 % $numder2);
}
