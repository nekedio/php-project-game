<?php

namespace BrainGames\games\progression;

use function BrainGames\engine\startEngine;

function getDataGameProgression()
{
    $conditionGames = 'What number is missing in the progression?';
    $dataGame = [];
    while (count($dataGame) < COUNT_SETH) {
        $dataGame[] = getDataSetProgression();
    }
    startEngine($conditionGames, $dataGame);
    return;
}

function getDataSetProgression()
{
    $progression = "";
    $randomFirsProgressionMemberMin = -10;
    $randomFirsProgressionMemberMax = 10;
    $progressionMember = rand($randomFirsProgressionMemberMin, $randomFirsProgressionMemberMax);
    $randomStepMin = 2;
    $randomStepMax = 3;
    $step = rand($randomStepMin, $randomStepMax);
    $randomQuestionMin = 0;
    $randomQuestionMax = 9;
    $question = rand($randomQuestionMin, $randomQuestionMax);
    $countMemberProgression = 10;
    for ($i = 0; $i < $countMemberProgression; $i++) {
        $progressionMember = $progressionMember + $step;
        if ($i == $question) {
            $progression = $progression . " " . "..";
            $ansver = $progressionMember;
        } else {
            $progression = $progression . " " . $progressionMember;
        }
    }
    return [trim($progression), (string)$ansver];
}
