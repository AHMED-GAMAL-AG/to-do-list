<?php


$a = 0;
echo isset($a) ? 'defined' :'undefined' ; echo '<hr>';

const b = 100;
// echo isset(b) ? 'defined' :'undefined' ; // parse error use defined() instead

echo defined('b') ? 'defined' :'undefined' ; echo '<hr>';
echo defined("b") ? 'defined' :'undefined' ; echo '<hr>';