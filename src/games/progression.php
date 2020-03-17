<?php

namespace BrainGames\games\progression;

use function BrainGames\engine\startEngine;

function getDataGameProgression()
{
    $arrayDataSet1 = getDataSetProgression();
    $arrayDataSet2 = getDataSetProgression();
    $arrayDataSet3 = getDataSetProgression();
    $result = [
        "condition" => "What number is missing in the progression?",
        ["question" => $arrayDataSet1[0], "correctAnswer" => $arrayDataSet1[1]],
        ["question" => $arrayDataSet2[0], "correctAnswer" => $arrayDataSet2[1]],
        ["question" => $arrayDataSet3[0], "correctAnswer" => $arrayDataSet3[1]]
    ];
    startEngine($result);
    return;
}

function getDataSetProgression()
{
    $progression = "";
    $k = rand(-10, 10);
    $d = rand(2, 3);
    $question = rand(0, 9);
    for ($i = 0; $i < 10; $i++) {
        $k = $k + $d;
        if ($i == $question) {
            $progression = $progression . " " . "..";
            $ansver = $k;
        } else {
            $progression = $progression . " " . $k;
        }
    }
    return [trim($progression), (string)$ansver];
}
