<?php

namespace app\models\services;


class Debug
{
    public static function vardump($var)
    {
        echo '<pre>';
        var_dump($var);
        echo '</pre>';
    }

    public static function printR($var)
    {
        echo '<pre>';
        print_r($var);
        echo '</pre>';
    }
}