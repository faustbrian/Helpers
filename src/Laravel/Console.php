<?php

if (!function_exists('artisan')) {
    function artisan($command = null, array $parameters = [])
    {
        $artisan = app('Illuminate\Contracts\Console\Kernel');

        if (!empty($command)) {
            return $artisan->call($command, $parameters);
        }

        return $artisan;
    }
}
