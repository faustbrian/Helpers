<?php

/*
 * This file is part of Helpers.
 *
 * (c) Brian Faust <hello@brianfaust.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

if (! function_exists('events')) {
    function events()
    {
        return app('events');
    }
}

if (! function_exists('commands')) {
    function commands()
    {
        return app('Illuminate\Bus\Dispatcher');
    }
}

if (! function_exists('queue')) {
    function queue()
    {
        return app('Illuminate\Queue\QueueManager');
    }
}
