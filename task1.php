<?php

// Using a for loop
function printEvenNumbersFor(int $start, int $end, int $step)
{
    echo "Using for loop: ";
    for ($i = $start; $i <= $end; $i += $step) {
        if ($i % 2 == 1) {
            $i = 2;
        }
        if ($i % 2 == 0) {
            echo $i . " ";
        }
    }
    echo "\n";
}
printEvenNumbersFor(1, 20, 2);



// Using a while loop
function printEvenNumbersWhile(int $start, int $end, int $step)
{
    echo "Using while loop: ";

    while ($start <= $end) {

        if ($start % 2 == 1) {
            $start = 2;
        }
        if ($start % 2 == 0) {
            echo $start . " ";
        }

        $start += $step;
    }
    echo "\n";
}
printEvenNumbersWhile(1, 20, 2);


// Using a do-while loop
function printEvenNumbersDoWhile($start, $end, $step)
{
    echo "Using do-while loop: ";
    do {
        if ($start % 2 == 1) {
            $start = 2;
        }
        if ($start % 2 == 0) {
            echo $start . " ";
        }
        $start += $step;
    } while ($start <= $end);
    echo "\n";
}
printEvenNumbersDoWhile(2, 20, 2);
