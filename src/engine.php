<?php

namespace BrainGames\engine;

use function BrainGames\Cli\correctAnswer;
use function BrainGames\Cli\incorrectAnswer;

function engineGames($resultSetGame)
{
    if ($resultSetGame[0] == $resultSetGame[1]) {
        correctAnswer();
        return true;
    } else {
        incorrectAnswer($resultSetGame);
        return false;
    }
}
