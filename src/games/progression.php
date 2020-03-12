<?php

namespace BrainGames\games\progression;

function getDataGameProgression()
{
    $dataGame = [];
    for ($i = 0; $i < COUNTSETH; $i++) {
        $dataGame[] = getDataSetProgression();
    }
    return $dataGame;
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
