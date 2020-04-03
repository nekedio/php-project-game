<?php

namespace BrainGames\games\progression;

use function BrainGames\engine\engine;

use const BrainGames\engine\SETS_COUNT;

function initGameProgression()
{
    $conditionGame = 'What number is missing in the progression?';
    $dataGame = [];
    while (count($dataGame) < SETS_COUNT) {
        $dataGame[] = getDataSetProgression();
    }
    engine($conditionGame, $dataGame);
    return;
}

function getDataSetProgression()
{
    $lengthProgression = 10;
    $minDiff = 2;
    $maxDiff = 4;
    $diffProgression = rand($minDiff, $maxDiff);
    $shiftProgression = rand(-5, 5);
    $progression = getRandomProgression($lengthProgression, $diffProgression, $shiftProgression);
    $questionNumber = array_rand($progression);
    $correctAnswer = $progression[$questionNumber];
    $question = [];
    foreach ($progression as $key => $member) {
        if ($key === $questionNumber) {
            $question[] = "..";
            continue;
        }
        $question[] = $member;
    }
    return [implode(" ", $question), (string)$correctAnswer];
}

function getRandomProgression($length, $diff, $shift)
{
    $progression = [];
    for ($i = 0; $i < $length; $i++) {
        $progression[] = $diff * $i + $shift;
    }
    return $progression;
}
