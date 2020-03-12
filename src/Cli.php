<?php

namespace BrainGames\Cli;

use function cli\line;

function welcomeGameEven()
{
    line('Welcome to the Brain Game!');
    line('Answer "yes" if the number is even, otherwise answer "no".');
    return;
}

function welcomeGameGcd()
{
    line('Welcome to the Brain Game!');
    line('Find the greatest common divisor of given numbers.');
    return;
}

function welcomeGameCalc()
{
    line('Welcome to the Brain Game!');
    line('What is the result of the expression?');
    return;
}

function welcomeGameProgression()
{
    line('Welcome to the Brain Game!');
    line('What number is missing in the progression?');
    return;
}

function welcomeGamePrime()
{
    line('Welcome to the Brain Game!');
    line('Answer "yes" if given number is prime. Otherwise answer "no".');
    return;
}
