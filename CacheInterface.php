<?php

interface CacheInterface
{
    /**
     * Get data from the cache.
     *
     * @param string $key
     * @return string Stored data. FALSE if the key has no data.
     */
    function retrieve($key);

    /**
     * Checks if the cache has data associated to a key.
     * 
     * @param string $key
     * @return bool TRUE if the cache has data. FALSE if nothing is found.
     */
    function contains($key);

    /**
     * Set data for a key in cache.
     * 
     * @param string $key
     * @param string $data
     * @param int $ttl Time to live in minutes
     * @return bool TRUE if data successfully stored. FALSE in case of error.
     */
    function store($key, $data, $TTL = 0);

    /**
     * Drop data associated to a key.
     * 
     * @param string $key
     * @return bool TRUE if data successfully removed. FALSE in case of error.
     */
    function remove($key);
}
