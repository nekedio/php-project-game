<?php

namespace BrainGames\games\prime;

function runPrime()
{
    $question = rand(0, 99);
    if ($question == 0 || $question == 1) {
        return [$question, 'no'];
    }
    $i = round($question / 2, 0);
    while ($i > 1) {
        if ($question % $i == 0) {
            return [$question, 'no'];
        }
        $i--;
    }
    return [$question, 'yes'];
}
