<?php

function sum(...$numbers) // pass as many agrguiments as you want it will be put in an array $numbers
{
    $sum = 0;
    foreach ($numbers as  $num) {
        $sum += $num;
    }
    echo $sum;
}

sum (5,5,50);
echo '<hr>';

$numbers = [1,2,3,4,5];
sum (...$numbers); // put ... to pass an array