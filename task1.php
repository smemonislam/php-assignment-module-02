<?php

/**
 * Using a for loop
 * 
 * @param $start 
 * @param $end
 * @param $step
 * return: void 
 * 
 * */
function printEvenNumbers($start, $end, $step)
{
    echo "Using for loop: \n";
    if ($start !== 0 && $start % 2 !== 0) {
        $start = ($start + 1);
    }
    for ($i = $start; $i <= $end; $i += $step) {
        if ($i % 2 == 0) {
            echo "{$i} \n";
        }
    }
}

printEvenNumbers(1, 20, 2);

// function printEvenNumbersUsingForLoop($start, $end, $step)
// {

//     for ($i = $start; $i <= $end; $i++) {

//         if ($i % $step == 0) {
//             echo $i++;
//             echo "\n";
//         }
//     }
// }

// printEvenNumbersUsingForLoop(1, 20, 2);


/**
 * Using a while loop
 * 
 * @param $start 
 * @param $end
 * @param $step
 * return: void 
 * 
 * */
function printEvenNumbersWhile(int $start, int $end, int $step)
{
    echo "Using while loop: \n";

    while ($start <= $end) {

        if ($start !== 0 && $start % 2 !== 0) {
            $start = ($start + 1);
        }

        echo "{$start} \n";

        $start += $step;
    }
    echo "\n";
}
printEvenNumbersWhile(1, 20, 2);

/**
 * Using a do-while loop
 * 
 * @param $start 
 * @param $end
 * @param $step
 * return: void 
 * 
 * */
function printEvenNumbersDoWhile($start, $end, $step)
{
    echo "Using do-while loop: \n";
    do {
        if ($start !== 0 && $start % 2 !== 0) {
            $start = ($start + 1);
        }

        echo "{$start} \n";

        $start += $step;
    } while ($start <= $end);
    echo "\n";
}
printEvenNumbersDoWhile(1, 20, 2);
