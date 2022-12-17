<?php

// php is loosley typed dosent neet to assing to int ,string ,etc..

echo 'getttype hello: ' . gettype('hello'); echo "<hr>";

// flase->null true->1
echo null .' null nothing'; echo "<hr>"; // nothing
echo false .' false nothing'; echo "<hr>"; // nothing
echo 'true: ' . true; //1
echo '<hr>';
// casting



$var =5; echo 'var to string: ' . gettype( (string) $var );
echo '<hr>';

echo 'true to int: ' . (integer) true; echo '<hr>';
echo 'false to int: ' .  (integer) false; echo '<hr>';
echo '12 to int: ' .  (integer) '12'; echo '<hr>';
echo 'hello to int: ' .  (integer) 'hello'; echo '<hr>';
echo '123hello to int: ' .  (integer) '123hello'; echo '<hr>';

echo '5 to boolean: ' . (boolean) 5; echo '<hr>';
echo 'hello to boolean: ' . (boolean) 'hello'; echo '<hr>';
echo '5hello to boolean: ' . (boolean) '5hello'; echo '<hr>';
echo '0 to boolean: ' . (boolean) 0; echo '<hr>'; // false->null
echo 'null to boolean: ' . (boolean) null; echo '<hr>'; // null->false
echo '0 string to boolean: ' . (boolean) '0'; echo '<hr>';
echo 'empty string to boolean: ' . (boolean) ''; echo '<hr>';


