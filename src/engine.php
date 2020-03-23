<?php

namespace BrainGames\engine;

define("COUNT_SETH", 3); //количество сетов игры

use function cli\line;
use function cli\prompt;

function startEngine($conditionGames, $arrayDataGame)
{
    line('Welcome to the Brain Game!');
    line($conditionGames);
    echo "\n";
    $nameUser = prompt('May I have your name?');
    foreach ($arrayDataGame as $arraySethGame) {
        line("Question: %s", $arraySethGame[0]);
        $answerUser = prompt('Your answer');
        if ($answerUser === $arraySethGame[1]) {
            line('Correct!');
        } else {
            line("'%s' is wrong answer ;(. Correct answer was '%s'", $answerUser, $arraySethGame[1]);
            return;
        }
    }
    line("Congratulation, %s!", $nameUser);
    return;
}
