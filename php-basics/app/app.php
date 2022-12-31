<?php


class App
{
    private static $entries = [];

    public static function set($key, $value) // set the data to the array [key] = value
    {
        static::$entries[$key] = $value; // static:: is eq to $this they point to class app current class
    }

    public static function get($key, $default = null) // get the data in the array by the $key passed
    {
        return static::$entries[$key] ?? $default; // if nothing is passed return null
    }
}
