<?php

/*
 * This file is part of Helpers.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

if (!function_exists('cache')) {
    function cache($key = null, $default = null)
    {
        if (is_null($key)) {
            return app('cache');
        }

        if (is_array($key)) {
            return app('cache')->put($key);
        }

        return app('cache')->get($key, $default);
    }
}

if (!function_exists('filesystem')) {
    function filesystem()
    {
        return app('files');
    }
}
