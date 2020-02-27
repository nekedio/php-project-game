<?php

namespace BrainGames\games\even;

define("EVEN", 2); //для проверки на четность

function runEven()
{
    $randomNumber = rand(0, 999);

    if ($randomNumber % EVEN == 0) {
        return [$randomNumber, 'yes'];
    }
    return [$randomNumber, 'no'];
}
