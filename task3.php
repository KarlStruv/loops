<?php
//Write a program that asks the user to enter two words.
// The program then prints out both words on one line.
// The words will be separated by enough dots so that the total line length is 30:
//
//Enter first word:
//turtle
//Enter second word
//153
//turtle....................153

$firstWord = readline("Enter the first word: ");
$secondWord = readline("Enter the second word: ");
$firstWordLength = str_split($firstWord);
$secondWordLength = str_split($secondWord);

$dotAmount = (30 - count($firstWordLength) - count($secondWordLength));

echo $firstWord;

for ($i = 0; $i < $dotAmount; $i++){
    echo ".";
}

echo $secondWord;
