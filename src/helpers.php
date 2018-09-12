<?php

if (!function_exists('noah_path')) {

    /**
     * Get noah path.
     *
     * @param string $path
     *
     * @return string
     */
    function noah_path($path = '')
    {
        return ucfirst(config('noah.directory')).($path ? DIRECTORY_SEPARATOR.$path : $path);
    }
}
