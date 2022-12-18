<?php

$employes = [
    [
        'name' => 'ahmed',
        'age' => 25,
        'job' => 'software engineer',
        'skills' => ['PHP', 'MySQL', 'CSS', 'HTML5', 'problem solving'],
    ],

    [
        'name' => 'mohamed',
        'age' => 30,
        'job' => 'software engineer',
        'skills' => ['python', 'django', 'CSS', 'HTML5'],
    ],
];

$count = count($employes);
for ($i = 0; $i < $count; $i++) {
    echo $employes[$i]['name'];
    for ($j = 0; $j < count($employes[$i]['skills']); $j++) {
        echo ' - ' . $employes[$i]['skills'][$j];
    }
    echo '<hr>';
}

$i = 0;
while ($i < $count) {
    $j = 0;
    echo $employes[$i]['name'];
    while ($j < count($employes[$i]['skills'])) {
        echo ' - ' . $employes[$i]['skills'][$j];
        $j++;
    }
    $i++;
    echo '<hr>';
}
