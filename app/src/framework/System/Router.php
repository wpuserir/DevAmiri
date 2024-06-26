<?php

namespace App\System;

trait Router
{
    /**
     * @throws \Exception
     */
    public static function render(): void
    {
        if ( $_SERVER['REQUEST_METHOD'] !== 'GET')
            require_once base_path('app/routes/api.php');
        else
            require_once base_path('app/routes/web.php');
        \App\Router::run();
    }
}