<?php
require '_init.php';

Router::make()
    ->get('', 'app/controllers/index.php')
    ->get('about', 'app/controllers/about.php')
    ->post('task/create', 'app/controllers/task.create.php')
    ->resolve(Request::uri(), Request::method());
