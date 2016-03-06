<?php

/*
 * This file is part of Support.
 *
 * (c) DraperStudio <hello@draperstudio.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

if (!function_exists('sentinel')) {
    /**
     * @return \Illuminate\Foundation\Application|mixed
     */
    function sentinel()
    {
        return app('sentinel');
    }
}

if (!function_exists('sentinel_session')) {
    /**
     * @return \Illuminate\Foundation\Application|mixed
     */
    function sentinel_session()
    {
        return app('sentinel.session');
    }
}

if (!function_exists('sentinel_cookie')) {
    /**
     * @return \Illuminate\Foundation\Application|mixed
     */
    function sentinel_cookie()
    {
        return app('sentinel.cookie');
    }
}

if (!function_exists('sentinel_persistence')) {
    /**
     * @return \Illuminate\Foundation\Application|mixed
     */
    function sentinel_persistence()
    {
        return app('sentinel.persistence');
    }
}

if (!function_exists('sentinel_hasher')) {
    /**
     * @return \Illuminate\Foundation\Application|mixed
     */
    function sentinel_hasher()
    {
        return app('sentinel.hasher');
    }
}

if (!function_exists('sentinel_users')) {
    /**
     * @return \Illuminate\Foundation\Application|mixed
     */
    function sentinel_users()
    {
        return app('sentinel.users');
    }
}

if (!function_exists('sentinel_roles')) {
    /**
     * @return \Illuminate\Foundation\Application|mixed
     */
    function sentinel_roles()
    {
        return app('sentinel.roles');
    }
}

if (!function_exists('sentinel_activations')) {
    /**
     * @return \Illuminate\Foundation\Application|mixed
     */
    function sentinel_activations()
    {
        return app('sentinel.activations');
    }
}

if (!function_exists('sentinel_checkpoint_activation')) {
    /**
     * @return \Illuminate\Foundation\Application|mixed
     */
    function sentinel_checkpoint_activation()
    {
        return app('sentinel.checkpoint.activation');
    }
}

if (!function_exists('sentinel_throttling')) {
    /**
     * @return \Illuminate\Foundation\Application|mixed
     */
    function sentinel_throttling()
    {
        return app('sentinel.throttling');
    }
}

if (!function_exists('sentinel_checkpoint_throttle')) {
    /**
     * @return \Illuminate\Foundation\Application|mixed
     */
    function sentinel_checkpoint_throttle()
    {
        return app('sentinel.checkpoint.throttle');
    }
}

if (!function_exists('sentinel_checkpoints')) {
    /**
     * @return \Illuminate\Foundation\Application|mixed
     */
    function sentinel_checkpoints()
    {
        return app('sentinel.checkpoints');
    }
}

if (!function_exists('sentinel_reminders')) {
    /**
     * @return \Illuminate\Foundation\Application|mixed
     */
    function sentinel_reminders()
    {
        return app('sentinel.reminders');
    }
}
