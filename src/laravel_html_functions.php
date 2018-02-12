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

if (!function_exists('html')) {
    function html()
    {
        return app('html');
    }
}

if (!function_exists('decode')) {
    function decode($value)
    {
        return app('html')->decode($value);
    }
}

if (!function_exists('script')) {
    function script($url, $attributes = [], $secure = false)
    {
        return app('html')->script($url, $attributes, $secure);
    }
}

if (!function_exists('style')) {
    function style($url, $attributes = [], $secure = false)
    {
        return app('html')->style($url, $attributes, $secure);
    }
}

if (!function_exists('image')) {
    function image($url, $alt = null, $attributes = [], $secure = false)
    {
        return app('html')->image($url, $alt, $attributes, $secure);
    }
}

if (!function_exists('href')) {
    function href($url, $title = null, $attributes = [], $secure = false)
    {
        return app('html')->link($url, $title, $attributes, $secure);
    }
}

if (!function_exists('secure_link')) {
    function secure_link($url, $title = null, $attributes = [])
    {
        return app('html')->secureLink($url, $title, $attributes);
    }
}

if (!function_exists('link_asset')) {
    function link_asset($url, $title = null, $attributes = [], $secure = false)
    {
        return app('html')->linkAsset($url, $title, $attributes, $secure);
    }
}

if (!function_exists('link_secure_asset')) {
    function link_secure_asset($url, $title = null, $attributes = [])
    {
        return app('html')->linkSecureAsset($url, $title, $attributes);
    }
}

if (!function_exists('link_route')) {
    function link_route($name, $title = null, $parameters = [], $attributes = [])
    {
        return app('html')->linkRoute($name, $title, $parameters, $attributes);
    }
}

if (!function_exists('link_action')) {
    function link_action($action, $title = null, $parameters = [], $attributes = [])
    {
        return app('html')->linkAction($action, $title, $parameters, $attributes);
    }
}

if (!function_exists('mailto')) {
    function mailto($email, $title = null, $attributes = [])
    {
        return app('html')->mailto($email, $title, $attributes);
    }
}

if (!function_exists('obfuscate_email')) {
    function obfuscate_email($email)
    {
        return app('html')->email($email);
    }
}

if (!function_exists('ol')) {
    function ol($list, $attributes = [])
    {
        return app('html')->ol($list, $attributes);
    }
}

if (!function_exists('ul')) {
    function ul($list, $attributes = [])
    {
        return app('html')->ul($list, $attributes);
    }
}

if (!function_exists('attributes')) {
    function attributes($attributes)
    {
        return app('html')->attributes($attributes);
    }
}

if (!function_exists('obfuscate')) {
    function obfuscate($value)
    {
        return app('html')->obfuscate($value);
    }
}

if (!function_exists('entities')) {
    function entities($value)
    {
        return app('html')->entities($value);
    }
}
