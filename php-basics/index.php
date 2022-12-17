<?php

$a= 1;
$b= '1';

echo 'a is not identecal to b true :' . $a !== $b; echo '<hr>';

// space ship operator 0 if eqaul ### 1 if left is greater ### -1 if right it greater
$a= 1;
$b= 1;
echo $a <=> $b; echo '<hr>';

$a= 2;
$b= 1;
echo  $a <=> $b; echo '<hr>';

$a= 1;
$b= 2;
echo  $a <=> $b; echo '<hr>';
