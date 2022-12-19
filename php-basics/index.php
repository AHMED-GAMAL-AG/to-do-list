<?php

// closure function

$myfunc = function ($number) {
    echo $number * 2 . ' ';
};

$ar = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

array_map($myfunc, $ar);
