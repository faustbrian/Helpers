<?php

/*
 * This file is part of Support.
 *
 * (c) DraperStudio <hello@draperstudio.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

if (!function_exists('html')) {
    /**
     * @return \Illuminate\Foundation\Application|mixed
     */
    function html()
    {
        return app('html');
    }
}

if (!function_exists('decode')) {
    /**
     * @param $value
     *
     * @return mixed
     */
    function decode($value)
    {
        return app('html')->decode($value);
    }
}

if (!function_exists('script')) {
    /**
     * @param $url
     * @param array $attributes
     * @param bool  $secure
     *
     * @return mixed
     */
    function script($url, $attributes = [], $secure = false)
    {
        return app('html')->script($url, $attributes, $secure);
    }
}

if (!function_exists('style')) {
    /**
     * @param $url
     * @param array $attributes
     * @param bool  $secure
     *
     * @return mixed
     */
    function style($url, $attributes = [], $secure = false)
    {
        return app('html')->style($url, $attributes, $secure);
    }
}

if (!function_exists('image')) {
    /**
     * @param $url
     * @param null  $alt
     * @param array $attributes
     * @param bool  $secure
     *
     * @return mixed
     */
    function image($url, $alt = null, $attributes = [], $secure = false)
    {
        return app('html')->image($url, $alt, $attributes, $secure);
    }
}

if (!function_exists('href')) {
    /**
     * @param $url
     * @param null  $title
     * @param array $attributes
     * @param bool  $secure
     *
     * @return mixed
     */
    function href($url, $title = null, $attributes = [], $secure = false)
    {
        return app('html')->link($url, $title, $attributes, $secure);
    }
}

if (!function_exists('secure_link')) {
    /**
     * @param $url
     * @param null  $title
     * @param array $attributes
     *
     * @return mixed
     */
    function secure_link($url, $title = null, $attributes = [])
    {
        return app('html')->secureLink($url, $title, $attributes);
    }
}

if (!function_exists('link_asset')) {
    /**
     * @param $url
     * @param null  $title
     * @param array $attributes
     * @param bool  $secure
     *
     * @return mixed
     */
    function link_asset($url, $title = null, $attributes = [], $secure = false)
    {
        return app('html')->linkAsset($url, $title, $attributes, $secure);
    }
}

if (!function_exists('link_secure_asset')) {
    /**
     * @param $url
     * @param null  $title
     * @param array $attributes
     *
     * @return mixed
     */
    function link_secure_asset($url, $title = null, $attributes = [])
    {
        return app('html')->linkSecureAsset($url, $title, $attributes);
    }
}

if (!function_exists('link_route')) {
    /**
     * @param $name
     * @param null  $title
     * @param array $parameters
     * @param array $attributes
     *
     * @return mixed
     */
    function link_route($name, $title = null, $parameters = [], $attributes = [])
    {
        return app('html')->linkRoute($name, $title, $parameters, $attributes);
    }
}

if (!function_exists('link_action')) {
    /**
     * @param $action
     * @param null  $title
     * @param array $parameters
     * @param array $attributes
     *
     * @return mixed
     */
    function link_action($action, $title = null, $parameters = [], $attributes = [])
    {
        return app('html')->linkAction($action, $title, $parameters, $attributes);
    }
}

if (!function_exists('mailto')) {
    /**
     * @param $email
     * @param null  $title
     * @param array $attributes
     *
     * @return mixed
     */
    function mailto($email, $title = null, $attributes = [])
    {
        return app('html')->mailto($email, $title, $attributes);
    }
}

if (!function_exists('obfuscate_email')) {
    /**
     * @param $email
     *
     * @return mixed
     */
    function obfuscate_email($email)
    {
        return app('html')->email($email);
    }
}

if (!function_exists('ol')) {
    /**
     * @param $list
     * @param array $attributes
     *
     * @return mixed
     */
    function ol($list, $attributes = [])
    {
        return app('html')->ol($list, $attributes);
    }
}

if (!function_exists('ul')) {
    /**
     * @param $list
     * @param array $attributes
     *
     * @return mixed
     */
    function ul($list, $attributes = [])
    {
        return app('html')->ul($list, $attributes);
    }
}

if (!function_exists('attributes')) {
    /**
     * @param $attributes
     *
     * @return mixed
     */
    function attributes($attributes)
    {
        return app('html')->attributes($attributes);
    }
}

if (!function_exists('obfuscate')) {
    /**
     * @param $value
     *
     * @return mixed
     */
    function obfuscate($value)
    {
        return app('html')->obfuscate($value);
    }
}

if (!function_exists('entities')) {
    /**
     * @param $value
     *
     * @return mixed
     */
    function entities($value)
    {
        return app('html')->entities($value);
    }
}
