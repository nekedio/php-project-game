<?php

namespace BrainGames\Cli;

use function cli\line; //для работы line и prompt
use function cli\prompt;

function yourName()
{
    echo "\n";
    $nameUser = prompt('May I have your name?');
    line("Hello, %s!", $nameUser);
    echo "\n";
    return $nameUser;
}


function helloEven()
{
    line('Welcome to the Brain Game!');
    line('Answer "yes" if the number is even, otherwise answer "no".');
    return;
}


function helloCalc()
{
    line('Welcome to the Brain Game!');
    line('What is the result of the expression?');
    return;
}

function helloProgression()
{
    line('Welcome to the Brain Game!');
    line('What number is missing in the progression?');
    return;
}

function helloPrime()
{
    line('Welcome to the Brain Game!');
    line('Answer "yes" if given number is prime. Otherwise answer "no".');
    return;
}

function question($qwestion)
{
    line("Question: %s", $qwestion);
    $answer = prompt('Your answer');
    return $answer;
}


function incorrectAnswer($result)
{
    line("'%s' is wrong answer ;(. Correct answer was '%s'", $result[0], $result[1]);
}


function correctAnswer()
{
    line('Correct!');
}


function engGame($nameUser)
{
    line("Congratulation, %s!", $nameUser);
}
