<?php

declare(strict_types=1);

/*
 * This file is part of Helpers.
 *
 * (c) Brian Faust <hello@basecode.sh>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

if (!function_exists('urls')) {
    function urls()
    {
        return app('Illuminate\Routing\UrlGenerator');
    }
}

if (!function_exists('translator')) {
    function translator()
    {
        return app('translator');
    }
}

if (!function_exists('message_bag')) {
    function message_bag($messages)
    {
        return new Illuminate\Support\MessageBag($messages);
    }
}
