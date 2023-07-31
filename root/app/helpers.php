<?php

if (!function_exists('route_url')) {
    function route_url($name, $parameters = [], $absolute = true)
    {
        return url(config('app.url') . '/' . ltrim(route($name, $parameters, false), '/'), [], $absolute);
    }
}
