<?php

$names = [
    'name' => 'ahmed',
    'age' => 25,
    'job' => 'software engineer',
    'skills' => ['PHP', 'MySQL', 'CSS', 'HTML5'],
];

echo $names['skills'][1]; echo '<hr>';
$names['skills'][]= 'OOP';
echo $names['skills'][4];