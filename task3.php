<?php
echo "First 10 Fibonacci numbers (break if greater than 100):\n";
$previous = 1;
$current = 1;
$count = 10;

for ($i = 0; $i <= $count; $i++) {

    if ($current > 100) {
        break;
    }
    echo $current . " ";

    $next = $previous + $current;
    $previous = $current;
    $current = $next;
}


// $previous = 1;
// $current = 1;
// $count = 0;

// while ($count <= 10) {

//     // Check if the current Fibonacci number exceeds 100
//     if ($current > 100) {
//         break; // Break out of the loop
//     }

//     echo $current . " ";
//     $next = $previous + $current;

//     $previous = $current;
//     $current = $next;
//     $count++;
// }

// echo "\n";
