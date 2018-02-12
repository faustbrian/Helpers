<?php

declare(strict_types=1);

/*
 * This file is part of Helpers.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

if (!function_exists('auth')) {
    function auth()
    {
        return app('auth');
    }
}

if (!function_exists('current_user')) {
    function current_user()
    {
        return app('auth')->user();
    }
}

if (!function_exists('socialite')) {
    function socialite($provider)
    {
        return app('Laravel\Socialite\Contracts\Factory')->with($provider);
    }
}
