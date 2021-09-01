<?php
//Write a console program in a class named RollTwoDice that prompts
// the user for a desired sum, then repeatedly rolls two six-sided dice
// (using a Random object to generate random numbers from 1-6) until the sum
// of the two dice values is the desired sum. Here is the expected dialogue with the user:

$desiredOutcome = (int)readline("Desired outcome: ");
if ($desiredOutcome < 2 || $desiredOutcome > 12){
    echo "Enter a valid possible outcome!" . PHP_EOL;
    exit;
}

echo PHP_EOL;
$turn = 1;
while($turn > 0){
    $firstDice = rand(1, 6);
    $secondDice = rand(1, 6);
    $outcome = $firstDice + $secondDice;
    echo "$firstDice and $secondDice = $outcome" . PHP_EOL;
    if($outcome === $desiredOutcome){
        exit;
    }else{
        $turn++;
    }
}