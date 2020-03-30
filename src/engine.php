<?php

namespace BrainGames\engine;

define("SETS_COUNT", 3); //количество сетов игры

use function cli\line;
use function cli\prompt;

function engine($conditionGame, $arrayDataGame)
{
    line('Welcome to the Brain Game!');
    line($conditionGame);
    line("\n");
    $userName = prompt('May I have your name?');
    foreach ($arrayDataGame as [$question, $correctAnswer]) {
        line("Question: %s", $question);
        $answerUser = prompt('Your answer');
        if ($answerUser === $correctAnswer) {
            line('Correct!');
        } else {
            line("'%s' is wrong answer ;(. Correct answer was '%s'", $answerUser, $correctAnswer);
            return;
        }
    }
    line("Congratulation, %s!", $userName);
    return;
}
