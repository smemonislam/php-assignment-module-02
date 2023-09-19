<?php

function printFibonacci($count)
{
    $previous = 0;
    $current = 1;
    $next = 1;

    echo "Fibonacci Series of the first $count numbers:\n";
    for ($i = 0; $i < $count; $i++) {
        echo "{$previous} ";
        $current = $next;
        $next = $current + $previous;
        $previous = $current;
    }
}

printFibonacci(15);
