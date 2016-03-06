<?php

/*
 * This file is part of Support.
 *
 * (c) DraperStudio <hello@draperstudio.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

if (!function_exists('array_is_multi')) {
    /**
     * @param array $array
     *
     * @return bool
     */
    function array_is_multi(array $array)
    {
        return count($array) != count($array, 1);
    }
}

if (!function_exists('array_trim')) {
    /**
     * @param array $array
     *
     * @return array
     */
    function array_trim(array $array)
    {
        return array_map('trim', $array);
    }
}

if (!function_exists('array_lower_case')) {
    /**
     * @param array $array
     *
     * @return array
     */
    function array_lower_case(array $array)
    {
        return array_map('strtolower', $array);
    }
}

if (!function_exists('array_upper_case')) {
    /**
     * @param array $array
     *
     * @return array
     */
    function array_upper_case(array $array)
    {
        return array_map('strtoupper', $array);
    }
}

if (!function_exists('array_camel_case')) {
    /**
     * @param array $array
     *
     * @return array
     */
    function array_camel_case(array $array)
    {
        return array_map('camel_case', $array);
    }
}

if (!function_exists('array_studly_case')) {
    /**
     * @param array $array
     *
     * @return array
     */
    function array_studly_case(array $array)
    {
        return array_map('studly_case', $array);
    }
}

if (!function_exists('array_snake_case')) {
    /**
     * @param array $array
     *
     * @return array
     */
    function array_snake_case(array $array)
    {
        return array_map('snake_case', $array);
    }
}

if (!function_exists('arr_get')) {
    /**
     * @param array $array
     * @param $key
     * @param null $fallback
     */
    function arr_get(array $array, $key, $fallback = null)
    {
        return empty($array[$key]) ? $fallback : $array[$key];
    }
}
