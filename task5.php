<?php
//Write a console program in a class named Piglet that implements a simple 1-player
// dice game called "Piglet" (based on the game "Pig"). The player's goal is to accumulate
// as many points as possible without rolling a 1. Each turn, the player rolls the die; if they roll a 1,
// the game ends and they get a score of 0. Otherwise, they add this number to their running total score.
// The player then chooses whether to roll again, or end the game with their current point total.
// Here is an example dialogue where the user plays until rolling a 1, which ends the game with 0 points:
//
//Welcome to Piglet!

$play = readline("Roll?(y/n): ");
$dice = 0;
$points = 0;
$roll = 1;

while($roll > 0) {
    if ($play === "y") {
        echo "You roll: " . $dice = rand(1, 6);
        echo PHP_EOL;

        if($dice !== 1){
            echo "Points: " . $points += $dice;
            echo PHP_EOL;
            $playAgain = readline("Roll again?(y/n)");

            if ($playAgain === "y"){
                continue;
            }
            else{
                $roll = 0;
                echo "You finished the game with $points points." . PHP_EOL;
            }
        }
        else{
            echo "You lose." . PHP_EOL;
            $roll = 0;
        }
    }
    else {
        echo "ok..." . PHP_EOL;
        exit;
    }
}