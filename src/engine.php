<?php

namespace BrainGames\engine;

use function BrainGames\Cli\correctAnswer;
use function BrainGames\Cli\incorrectAnswer;
use function BrainGames\Cli\question;

function engineGames($resultSetGame)
{
    //var_dump($resultSetGame);
    $answer = question($resultSetGame[0]);
    $correctAnswer = $resultSetGame[1];
    if ($answer === $correctAnswer) {
        correctAnswer();
        return true;
    } else {
        incorrectAnswer([$answer, $correctAnswer]);
        return false;
    }
}
