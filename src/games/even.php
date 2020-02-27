<?php

namespace BrainGames\games\even;

use function cli\line;  //для работы line и prompt
use function cli\prompt;

define("EVEN", 2); //для проверки на четность

/*
function runEvenOld()
{
    $result = [];
    $randomNumber = rand(0, 999);
    $arrayCorrectAnswer = ['yes', 'no'];
    //line("Question: %s", $randomNumber);
    //$answer = prompt('Your answer');
    if (!(in_array($answer, $arrayCorrectAnswer) && ($answer == correctAnswer($randomNumber)))) {
        $result = [$answer, correctAnswer($randomNumber)];
    } else {
        $result =  [$answer, correctAnswer($randomNumber)];
    }
    return $result;
}
*/


function runEven()
{
    $randomNumber = rand(0, 999);

    if ($randomNumber % EVEN == 0) {
        return [$randomNumber, 'yes'];
    }
    return [$randomNumber, 'no'];
}
