<?php
$rows = (int)readline("Enter the amount of rows: ");

for ($r = 1; $r <= $rows; $r++){
    echo PHP_EOL;
    $columns = $rows * 8 - 8;

    for ($c = 1; $c <= $columns; $c++){

        if ($c > ($columns) /2 - (4  * ($r - 1)) && $c <= ($columns) / 2 + (4 * ($r - 1))) {
            echo "*";
        }

        else if ($c <= $columns / 2){
            echo "/" ;
        } else {
            echo "\\";
        }


    }

}