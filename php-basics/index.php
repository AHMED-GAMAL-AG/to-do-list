<?php

// null coalescing operator (PHP v.7)

$name = 'ahmed';
$email = 'email@example.com';

echo isset($name) ? $name : 'nobody'; echo '<hr>';

echo $name ?? $email ?? 'nobody'; // email if not defined then email if not defined then nobody