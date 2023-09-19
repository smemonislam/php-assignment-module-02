<?php

// Using a for loop
function printEvenNumbersFor(int $start, int $end, int $step)
{
    echo "Using for loop: ";
    for ($i = $start; $i <= $end; $i += $step) {
        if ($i % 2 == 0) {
            echo $i . " ";
        }
    }
    echo "\n";
}
printEvenNumbersFor(2, 20, 2);



// Using a while loop
function printEvenNumbersWhile(int $start, int $end, int $step)
{
    echo "Using while loop: ";

    while ($start <= $end) {

        echo $start . " ";

        $start += $step;
    }
    echo "\n";
}
printEvenNumbersWhile(2, 20, 2);


// Using a do-while loop
function printEvenNumbersDoWhile($start, $end, $step)
{
    echo "Using do-while loop: ";
    do {
        echo $start . " ";
        $start += $step;
    } while ($start <= $end);
    echo "\n";
}
printEvenNumbersDoWhile(2, 20, 2);
