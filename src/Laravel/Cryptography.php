<?php

/*
 * This file is part of Support.
 *
 * (c) DraperStudio <hello@draperstudio.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

if (!function_exists('crypto')) {
    /**
     * @return \Illuminate\Foundation\Application|mixed
     */
    function crypto()
    {
        return app('encrypter');
    }
}

if (!function_exists('hasher')) {
    /**
     * @return \Illuminate\Foundation\Application|mixed
     */
    function hasher()
    {
        return app('hash');
    }
}
