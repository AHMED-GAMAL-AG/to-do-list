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

$skill_count = count($employes[1]['skills']);

foreach ($employes as $employee) {
    echo $employee['name'] . ' - ' . $employee['job'];
    echo '<hr>';
}

echo '<hr>';

foreach ($employes as $key => $employee) {
    echo $employee['name'];
    for ($i = 0; $i < count($employes[$key]['skills']); $i++) {
        echo ' - ' . $employee['skills'][$i];
    }
    echo '<hr>';
}
