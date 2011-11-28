<?php

interface LogInterface
{
    // maybe add some constants for priorities?
    function log($message, $priority = null);

    // maybe leave out the following methods?
    function error($message);

    function warn($message);

    function notice($message);

    function info($message);

    function debug($message);
}
