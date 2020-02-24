<?php

namespace BrainGames\Cli;

//require __DIR__ . '/../vendor/autoload.php';

use function cli\line;  //подключаю нужные фунуции из библиотеки
use function cli\prompt;

function yourName()
{
    line('Welcome to the Brain Game!');
    line('Answer "yes" if the number is even, otherwise answer "no".');
    echo "\n";
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    echo "\n";
    //echo "___TEST_TEST_TEST___", PHP_EOL;
    return $name;
}
