<?php

/*
 * This file is part of Helpers.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

if (! function_exists('logger')) {
    function logger()
    {
        return app('log');
    }
}

if (! function_exists('log_alert')) {
    function log_alert($message, $context = [])
    {
        return app('log')->alert($message, $context);
    }
}

if (! function_exists('log_critical')) {
    function log_critical($message, $context = [])
    {
        return app('log')->critical($message, $context);
    }
}

if (! function_exists('log_error')) {
    function log_error($message, $context = [])
    {
        return app('log')->error($message, $context);
    }
}

if (! function_exists('log_warning')) {
    function log_warning($message, $context = [])
    {
        return app('log')->warning($message, $context);
    }
}

if (! function_exists('log_info')) {
    function log_info($message, $context = [])
    {
        return app('log')->info($message, $context);
    }
}

if (! function_exists('log_notice')) {
    function log_notice($message, $context = [])
    {
        return app('log')->notice($message, $context);
    }
}

if (! function_exists('log_debug')) {
    function log_debug($message, $context = [])
    {
        return app('log')->debug($message, $context);
    }
}
