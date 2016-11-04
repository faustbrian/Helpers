<?php

if (!function_exists('events')) {
    function events()
    {
        return app('events');
    }
}

if (!function_exists('commands')) {
    function commands()
    {
        return app('Illuminate\Bus\Dispatcher');
    }
}

if (!function_exists('queue')) {
    function queue()
    {
        return app('Illuminate\Queue\QueueManager');
    }
}
