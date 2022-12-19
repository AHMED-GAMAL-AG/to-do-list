<?php

// closure function
$ar = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$num = 3; // to be passed both functions

$myfunc = function ($number) use ($num) { // should use use() to use external variable
    echo ($number * 2 + $num) . ' ';
};

function regular(...$number)
{
    global $num;  // use globe to use external variable
    foreach ($number as $n) {
        echo ($n * 2 + ($num)) . ' ';
    }
}

// arrow function (php v7.4)
$arrow_func = fn ($number) => ($number * 2 + $num); // can use num with any problems

array_map($myfunc, $ar);
echo '<hr>';

regular(...$ar);
echo '<hr>'; // ... to pass array

foreach (array_map($arrow_func, $ar) as $num) {
    echo $num . ' ';
}
echo '<hr>';
