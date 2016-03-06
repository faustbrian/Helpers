<?php

/*
 * This file is part of Support.
 *
 * (c) DraperStudio <hello@draperstudio.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

if (!function_exists('jwt')) {
    /**
     * @return \Illuminate\Foundation\Application|mixed
     */
    function jwt()
    {
        return app('tymon.jwt.auth');
    }
}

if (!function_exists('jwt_auth')) {
    /**
     * @return \Illuminate\Foundation\Application|mixed
     */
    function jwt_auth()
    {
        return app('tymon.jwt.auth');
    }
}

if (!function_exists('jwt_provider_jwt')) {
    /**
     * @return \Illuminate\Foundation\Application|mixed
     */
    function jwt_provider_user()
    {
        return app('tymon.jwt.provider.user');
    }
}

if (!function_exists('jwt_provider_jwt')) {
    /**
     * @return \Illuminate\Foundation\Application|mixed
     */
    function jwt_provider_jwt()
    {
        return app('tymon.jwt.provider.jwt');
    }
}

if (!function_exists('jwt_provider_auth')) {
    /**
     * @return \Illuminate\Foundation\Application|mixed
     */
    function jwt_provider_auth()
    {
        return app('tymon.jwt.provider.auth');
    }
}

if (!function_exists('jwt_provider_storage')) {
    /**
     * @return \Illuminate\Foundation\Application|mixed
     */
    function jwt_provider_storage()
    {
        return app('tymon.jwt.provider.storage');
    }
}

if (!function_exists('jwt_blacklist')) {
    /**
     * @return \Illuminate\Foundation\Application|mixed
     */
    function jwt_blacklist()
    {
        return app('tymon.jwt.blacklist');
    }
}

if (!function_exists('jwt_claim_factory')) {
    /**
     * @return \Illuminate\Foundation\Application|mixed
     */
    function jwt_claim_factory()
    {
        return app('tymon.jwt.claim.factory');
    }
}

if (!function_exists('jwt_manager')) {
    /**
     * @return \Illuminate\Foundation\Application|mixed
     */
    function jwt_manager()
    {
        return app('tymon.jwt.manager');
    }
}

if (!function_exists('jwt_validators_payload')) {
    /**
     * @return \Illuminate\Foundation\Application|mixed
     */
    function jwt_validators_payload()
    {
        return app('tymon.jwt.validators.payload');
    }
}

if (!function_exists('jwt_payload_factory')) {
    /**
     * @return \Illuminate\Foundation\Application|mixed
     */
    function jwt_payload_factory()
    {
        return app('tymon.jwt.payload.factory');
    }
}

if (!function_exists('jwt_generate')) {
    /**
     * @return \Illuminate\Foundation\Application|mixed
     */
    function jwt_generate()
    {
        return app('tymon.jwt.generate');
    }
}
