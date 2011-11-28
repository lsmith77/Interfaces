<?php

interface LogInterface
{
    function err($message);

    function warn($message);

    function notice($message);

    function info($message);

    function debug($message);
}
