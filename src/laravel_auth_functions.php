<?php



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
