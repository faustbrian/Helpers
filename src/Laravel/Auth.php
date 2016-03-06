<?php

/*
 * This file is part of Support.
 *
 * (c) DraperStudio <hello@draperstudio.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

if (!function_exists('auth')) {
    /**
     * @return \Illuminate\Foundation\Application|mixed
     */
    function auth()
    {
        return app('auth');
    }
}

if (!function_exists('current_user')) {
    /**
     * @return mixed
     */
    function current_user()
    {
        return app('auth')->user();
    }
}

if (!function_exists('socialite')) {
    /**
     * @param $provider
     *
     * @return mixed
     */
    function socialite($provider)
    {
        return app('Laravel\Socialite\Contracts\Factory')->with($provider);
    }
}
