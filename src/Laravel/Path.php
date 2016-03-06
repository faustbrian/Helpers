<?php

/*
 * This file is part of Support.
 *
 * (c) DraperStudio <hello@draperstudio.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

if (!function_exists('bootstrap_path')) {
    /**
     * @param string $path
     *
     * @return string
     */
    function bootstrap_path($path = '')
    {
        return base_path('bootstrap').($path ? '/'.$path : $path);
    }
}

if (!function_exists('database_path')) {
    /**
     * @param string $path
     *
     * @return string
     */
    function database_path($path = '')
    {
        return base_path('database').($path ? '/'.$path : $path);
    }
}

if (!function_exists('database_migrations_path')) {
    /**
     * @param string $path
     *
     * @return string
     */
    function database_migrations_path($path = '')
    {
        return base_path('database/migrations').($path ? '/'.$path : $path);
    }
}

if (!function_exists('database_seeds_path')) {
    /**
     * @param string $path
     *
     * @return string
     */
    function database_seeds_path($path = '')
    {
        return base_path('database/seeds').($path ? '/'.$path : $path);
    }
}

if (!function_exists('resources_path')) {
    /**
     * @param string $path
     *
     * @return string
     */
    function resources_path($path = '')
    {
        return base_path('resources').($path ? '/'.$path : $path);
    }
}

if (!function_exists('resources_assets_path')) {
    /**
     * @param string $path
     *
     * @return string
     */
    function resources_assets_path($path = '')
    {
        return base_path('resources/assets').($path ? '/'.$path : $path);
    }
}

if (!function_exists('resources_language_path')) {
    /**
     * @param string $path
     *
     * @return string
     */
    function resources_language_path($path = '')
    {
        return base_path('resources/lang').($path ? '/'.$path : $path);
    }
}

if (!function_exists('resources_views_path')) {
    /**
     * @param string $path
     *
     * @return string
     */
    function resources_views_path($path = '')
    {
        return base_path('resources/views').($path ? '/'.$path : $path);
    }
}

if (!function_exists('app_storage_path')) {
    /**
     * @param string $path
     *
     * @return string
     */
    function app_storage_path($path = '')
    {
        return storage_path('app').($path ? '/'.$path : $path);
    }
}

if (!function_exists('framework_storage_path')) {
    /**
     * @param string $path
     *
     * @return string
     */
    function framework_storage_path($path = '')
    {
        return storage_path('framework').($path ? '/'.$path : $path);
    }
}

if (!function_exists('framework_cache_path')) {
    /**
     * @param string $path
     *
     * @return string
     */
    function framework_cache_path($path = '')
    {
        return storage_path('framework/cache').($path ? '/'.$path : $path);
    }
}

if (!function_exists('framework_sessions_path')) {
    /**
     * @param string $path
     *
     * @return string
     */
    function framework_sessions_path($path = '')
    {
        return storage_path('framework/sessions').($path ? '/'.$path : $path);
    }
}

if (!function_exists('framework_views_path')) {
    /**
     * @param string $path
     *
     * @return string
     */
    function framework_views_path($path = '')
    {
        return storage_path('framework/views').($path ? '/'.$path : $path);
    }
}

if (!function_exists('logs_path')) {
    /**
     * @param string $path
     *
     * @return string
     */
    function logs_path($path = '')
    {
        return storage_path('logs').($path ? '/'.$path : $path);
    }
}
