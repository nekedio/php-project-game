<?php

namespace BrainGames\engine;

use function cli\line;
use function cli\prompt;

function startEngine($dataGameCalc)
{
    echo "\n";
    $nameUser = prompt('May I have your name?');
    line("Hello, %s!", $nameUser);
    echo "\n";

    for ($i = 0; $i < COUNTSETH; $i++) {
        line("Question: %s", $dataGameCalc[$i][0]);
        $answerUser = prompt('Your answer');
        $correctAnswer = $dataGameCalc[$i][1];

        if ($answerUser === $correctAnswer) {
            line('Correct!');
        } else {
            line("'%s' is wrong answer ;(. Correct answer was '%s'", $answerUser, $correctAnswer);
            return false;
        }
    }
    
    line("Congratulation, %s!", $nameUser);
    return;
}
