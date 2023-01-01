<?php

use App\App;

function home() // to get home page url
{
    return trim(App::get('config')['app']['home_url'], '/');
}

function redirect($to) // redirect to passed path
{
    return header("location: {$to}");
}

function redirect_home() // redirect to home page
{
    redirect(home());
}

function back() // redirect to the latest page
{
    return header("location: {$_SERVER['HTTP_REFERER']}") ?? home(); // if no latest page then home page
}

function view($name, $data) // to load a view in the controllers
{
    extract($data); // import passed array to a variable $tasks...  
    require "resources/{$name}.view.php";
}
