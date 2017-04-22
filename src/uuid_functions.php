<?php



use Ramsey\Uuid\Uuid;

if (!function_exists('uuid1')) {
    function uuid1()
    {
        $uuid = Uuid::uuid1();

        return $uuid->toString();
    }
}

if (!function_exists('uuid3')) {
    function uuid3($ns, $name)
    {
        $uuid = Uuid::uuid3($ns, $name);

        return $uuid->toString();
    }
}

if (!function_exists('uuid4')) {
    function uuid4()
    {
        $uuid = Uuid::uuid4();

        return $uuid->toString();
    }
}

if (!function_exists('uuid5')) {
    function uuid5($ns, $name)
    {
        $uuid = Uuid::uuid5($ns, $name);

        return $uuid->toString();
    }
}
