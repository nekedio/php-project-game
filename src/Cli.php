<?php

namespace BrainGames\Cli;

require __DIR__ . '/../vendor/autoload.php';

use function cli\line;  //подключаю нужные фунуции из библиотеки
use function cli\prompt;

function run()
{
line('Welcome to the Brain Game!');
$name = prompt('May I have your name?');
line("Hello, %s!", $name);


//echo "___TEST_TEST_TEST___", PHP_EOL;
return;
}

