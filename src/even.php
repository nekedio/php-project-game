<?php

namespace BrainGames\even;

use function cli\line;  //подключаю нужные фунуции из библиотеки
use function cli\prompt;

define("COUNTSETH", 3); //количество сэтов игры
define("EVEN", 2); //для проверки на четность

function runEven($nameUser)
{
    $countCorrectAnswer = 0;

    for ($i = 0; $i < COUNTSETH; $i++) {
        $randomNumber = rand(0, 999);
        $arrayCorrectAnswer = ['yes', 'no'];
        line("Question: %s", $randomNumber);
        $answer = prompt('Your answer');
        if (!(in_array($answer, $arrayCorrectAnswer) && ($answer == correctAnswer($randomNumber)))) {
            line("'%s' is wrong answer ;(. Correct answer was '%s'", $answer, correctAnswer($randomNumber));
            break;  // выход из игры в случае неверного ответа
        } else {
            line('Correct!');
            $countCorrectAnswer = $countCorrectAnswer + 1;
        }
    }
    //var_dump($countCorrectAnswer);
    
    if ($countCorrectAnswer == COUNTSETH) {
        line("Congratulations, %s!", $nameUser);
    }
    
    echo "\n";
    return;
}

// формирование правильного ответа
function correctAnswer($number)
{
    if ($number % EVEN == 0) {
        return $correctAnswer = 'yes';
    }
    return $correctAnswer = 'no';
}
