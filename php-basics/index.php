<?php
require '_init.php'; // import all needed files dont forget when create  a new one


Router::make()
    // 'route name' , [controller::function , 'function name as a string']
    ->get('', [TaskController::class, 'index']) // get request
    ->post('task/create', [TaskController::class, 'create']) // post request
    ->get('task/delete', [TaskController::class, 'delete']) 
    ->get('task/update', [TaskController::class, 'update']) 
    ->resolve(Request::uri(), Request::method());
