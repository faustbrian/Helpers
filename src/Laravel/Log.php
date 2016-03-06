<?php

/*
 * This file is part of Support.
 *
 * (c) DraperStudio <hello@draperstudio.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

if (!function_exists('logger')) {
    /**
     * @return \Illuminate\Foundation\Application|mixed
     */
    function logger()
    {
        return app('log');
    }
}

if (!function_exists('log_alert')) {
    /**
     * @param $message
     * @param array $context
     *
     * @return mixed
     */
    function log_alert($message, $context = [])
    {
        return app('log')->alert($message, $context);
    }
}

if (!function_exists('log_critical')) {
    /**
     * @param $message
     * @param array $context
     *
     * @return mixed
     */
    function log_critical($message, $context = [])
    {
        return app('log')->critical($message, $context);
    }
}

if (!function_exists('log_error')) {
    /**
     * @param $message
     * @param array $context
     *
     * @return mixed
     */
    function log_error($message, $context = [])
    {
        return app('log')->error($message, $context);
    }
}

if (!function_exists('log_warning')) {
    /**
     * @param $message
     * @param array $context
     *
     * @return mixed
     */
    function log_warning($message, $context = [])
    {
        return app('log')->warning($message, $context);
    }
}

if (!function_exists('log_info')) {
    /**
     * @param $message
     * @param array $context
     *
     * @return mixed
     */
    function log_info($message, $context = [])
    {
        return app('log')->info($message, $context);
    }
}

if (!function_exists('log_notice')) {
    /**
     * @param $message
     * @param array $context
     *
     * @return mixed
     */
    function log_notice($message, $context = [])
    {
        return app('log')->notice($message, $context);
    }
}

if (!function_exists('log_debug')) {
    /**
     * @param $message
     * @param array $context
     *
     * @return mixed
     */
    function log_debug($message, $context = [])
    {
        return app('log')->debug($message, $context);
    }
}
