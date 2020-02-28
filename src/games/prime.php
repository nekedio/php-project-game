<?php

namespace BrainGames\games\prime;

function runPrime()
{
    $quwestion = rand(0, 99);
    if ($quwestion == 0 || $quwestion == 1) {
        return [$quwestion, 'no'];
    }
    $i = round($quwestion / 2, 0);
    while ($i > 1) {
        if ($quwestion % $i == 0) {
            return [$quwestion, 'no'];
        }
        $i--;
    }
    return [$quwestion, 'yes'];
}
