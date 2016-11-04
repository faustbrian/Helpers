<?php

if (!function_exists('sentinel')) {
    function sentinel()
    {
        return app('sentinel');
    }
}

if (!function_exists('sentinel_session')) {
    function sentinel_session()
    {
        return app('sentinel.session');
    }
}

if (!function_exists('sentinel_cookie')) {
    function sentinel_cookie()
    {
        return app('sentinel.cookie');
    }
}

if (!function_exists('sentinel_persistence')) {
    function sentinel_persistence()
    {
        return app('sentinel.persistence');
    }
}

if (!function_exists('sentinel_hasher')) {
    function sentinel_hasher()
    {
        return app('sentinel.hasher');
    }
}

if (!function_exists('sentinel_users')) {
    function sentinel_users()
    {
        return app('sentinel.users');
    }
}

if (!function_exists('sentinel_roles')) {
    function sentinel_roles()
    {
        return app('sentinel.roles');
    }
}

if (!function_exists('sentinel_activations')) {
    function sentinel_activations()
    {
        return app('sentinel.activations');
    }
}

if (!function_exists('sentinel_checkpoint_activation')) {
    function sentinel_checkpoint_activation()
    {
        return app('sentinel.checkpoint.activation');
    }
}

if (!function_exists('sentinel_throttling')) {
    function sentinel_throttling()
    {
        return app('sentinel.throttling');
    }
}

if (!function_exists('sentinel_checkpoint_throttle')) {
    function sentinel_checkpoint_throttle()
    {
        return app('sentinel.checkpoint.throttle');
    }
}

if (!function_exists('sentinel_checkpoints')) {
    function sentinel_checkpoints()
    {
        return app('sentinel.checkpoints');
    }
}

if (!function_exists('sentinel_reminders')) {
    function sentinel_reminders()
    {
        return app('sentinel.reminders');
    }
}
