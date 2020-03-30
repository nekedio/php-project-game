<?php

namespace BrainGames\games\progression;

use function BrainGames\engine\engine;

use const BrainGames\engine;

function initGameProgression()
{
    $conditionGame = 'What number is missing in the progression?';
    $dataGame = [];
    while (count($dataGame) < SETS_COUNT) {
        $dataGame[] = getDataSetProgression();
    }
    engine($conditionGame, $dataGame);
    getRandomProgression();
    return;
}

function getDataSetProgression()
{
    $progression = getRandomProgression();
    $questionNumber = rand(0, count($progression) - 1);
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

function getRandomProgression()
{
    $progression = [];
    $lengthProgression = 10;
    $minDiff = 2;
    $maxDiff = 4;
    $shiftProgression = rand(-5, 5);
    $diff = rand($minDiff, $maxDiff);
    for ($i = 0; $i < $lengthProgression; $i++) {
        $progression[] = $diff * $i + $shiftProgression;
    }
    return $progression;
}