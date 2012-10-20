<?php

interface CacheInterface
{
    /**
     * Get data from the cache.
     *
     * @param string $key Cache key
     * @param bool $success Set to TRUE if data was sucessfully retrieved,
     *                      FALSE if not data was found for the provided cache key
     * @return string Stored data.
     */
    function retrieve($key, &$success = null);

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
     * @param string $key Cache key
     * @param string $data Data, non string data must first be encoded
     * @param int $ttl Time to live in seconds, values <= 0 disable TTL
     * @return bool TRUE if data successfully stored. FALSE in case of error.
     */
    function store($key, $data, $TTL = 0);

    /**
     * Drop data associated to a key.
     * 
     * @param string $key Cache key
     * @return bool TRUE if data successfully removed. FALSE in case of error.
     */
    function remove($key);
}
