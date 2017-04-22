<?php



if (!function_exists('dbg')) {
    function dbg($data): void
    {
        dump($data);

        die(1);
    }
}

if (!function_exists('instance_of')) {
    function instance_of($class, array $types): bool
    {
        if (!is_object($class)) {
            return false;
        }

        foreach ($types as $type) {
            if ($class instanceof $type) {
                return true;
            }
        }

        return false;
    }
}
