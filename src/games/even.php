<?php

namespace BrainGames\games\even;

use function cli\line;  //для работы line и prompt
use function cli\prompt;

define("EVEN", 2); //для проверки на четность

function runEven()
{
    $result = [];
    $randomNumber = rand(0, 999);
    $arrayCorrectAnswer = ['yes', 'no'];
    line("Question: %s", $randomNumber);
    $answer = prompt('Your answer');
    if (!(in_array($answer, $arrayCorrectAnswer) && ($answer == correctAnswer($randomNumber)))) {
        $result = [$answer, correctAnswer($randomNumber)];
    } else {
        $result =  [$answer, correctAnswer($randomNumber)];
    }
    return $result;
}

// формирование правильного ответа
function correctAnswer($number)
{
    if ($number % EVEN == 0) {
        return $correctAnswer = 'yes';
    }
    return $correctAnswer = 'no';
}
