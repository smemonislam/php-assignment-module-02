<?php
echo "First 10 Fibonacci numbers (break if greater than 100):\n";
$previous = 0;
$current = 1;
$next = 1;
$count = 10;

for ($i = 0; $i < $count; $i++) {
    echo $previous . " ";
    $current = $next;
    $next = $current + $previous;
    $previous = $current;

    // Check if the current Fibonacci number exceeds 100
    if ($current > 100) {
        break; // Break out of the loop
    }
}
