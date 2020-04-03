<?php

namespace BrainGames\engine;

use function cli\line;
use function cli\prompt;

const SETS_COUNT = 3; //количество сетов игры

function engine($conditionGame, $dataGame)
{
    line('Welcome to the Brain Game!');
    line($conditionGame);
    line("\n");
    $userName = prompt('May I have your name?');
    foreach ($dataGame as [$question, $correctAnswer]) {
        line("Question: %s", $question);
        $answerUser = prompt('Your answer');
        if ($answerUser === $correctAnswer) {
            line('Correct!');
        } else {
            line("'%s' is wrong answer ;(. Correct answer was '%s'", $answerUser, $correctAnswer);
            line("Let's try again, %s!", $userName);
            return;
        }
    }
    line("Congratulation, %s!", $userName);
    return;
}
