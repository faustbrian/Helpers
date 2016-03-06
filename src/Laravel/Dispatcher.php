<?php

/*
 * This file is part of Support.
 *
 * (c) DraperStudio <hello@draperstudio.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

if (!function_exists('events')) {
    /**
     * @return \Illuminate\Foundation\Application|mixed
     */
    function events()
    {
        return app('events');
    }
}

if (!function_exists('commands')) {
    /**
     * @return \Illuminate\Foundation\Application|mixed
     */
    function commands()
    {
        return app('Illuminate\Bus\Dispatcher');
    }
}

if (!function_exists('queue')) {
    /**
     * @return \Illuminate\Foundation\Application|mixed
     */
    function queue()
    {
        return app('Illuminate\Queue\QueueManager');
    }
}
