<?php

namespace BrainGames\games\progression;

function runProgression()
{
  $progr = "";
  $k = rand(-10, 10);
  $d = rand(2, 5);
  $question = rand(0, 9);
  for ($i = 0; $i < 10; $i++){
      $k = $k + $d;
      if ($i == $question) {
        $progr = $progr . " " . "..";
        $ansver = $k;
      } else {
        $progr = $progr . " " . $k;
      }
  }
  return [trim($progr), (string)$ansver];
}