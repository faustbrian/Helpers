<?php

/*
 * This file is part of Support.
 *
 * (c) DraperStudio <hello@draperstudio.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

if (!function_exists('cache')) {
    /**
     * @param null $key
     * @param null $default
     *
     * @return \Illuminate\Foundation\Application|mixed
     */
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
    /**
     * @return \Illuminate\Foundation\Application|mixed
     */
    function filesystem()
    {
        return app('files');
    }
}
