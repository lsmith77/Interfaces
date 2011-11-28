<?php

interface CacheInterface
{
    function retrieve($key);

    function contains($key);

    function store($key, $data, $TTL = 0);

    function remove($key);
}
