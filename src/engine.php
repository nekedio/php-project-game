<?php

namespace BrainGames\engine;

define("COUNTSETH", 3); //количество сетов игры

use function cli\line;
use function cli\prompt;

function startEngine($arrayDataGame)
{
    line('Welcome to the Brain Game!');
    line($arrayDataGame["condition"]);
    echo "\n";
    $nameUser = prompt('May I have your name?');

    for ($i = 0; $i < COUNTSETH; $i++) {
        line("Question: %s", $arrayDataGame[$i]["question"]);
        $answerUser = prompt('Your answer');
        if ($answerUser === $arrayDataGame[$i]["correctAnswer"]) {
            line('Correct!');
        } else {
            line("'%s' is wrong answer ;(. Correct answer was '%s'", $answerUser, $arrayDataGame[$i]["correctAnswer"]);
            return false;
        }
    }
    line("Congratulation, %s!", $nameUser);
    return;
}
