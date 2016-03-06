<?php

/*
 * This file is part of Support.
 *
 * (c) DraperStudio <hello@draperstudio.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

if (!function_exists('urls')) {
    /**
     * @return \Illuminate\Foundation\Application|mixed
     */
    function urls()
    {
        return app('Illuminate\Routing\UrlGenerator');
    }
}

if (!function_exists('translator')) {
    /**
     * @return \Illuminate\Foundation\Application|mixed
     */
    function translator()
    {
        return app('translator');
    }
}

if (!function_exists('message_bag')) {
    /**
     * @param $messages
     *
     * @return \Illuminate\Support\MessageBag
     */
    function message_bag($messages)
    {
        return new Illuminate\Support\MessageBag($messages);
    }
}
