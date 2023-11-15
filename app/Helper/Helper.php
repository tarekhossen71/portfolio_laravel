<?php

/**
*   All View Share Data
*/

if (!function_exists('setThisPageTitle')) {
    function setThisPageTitle($title = '')
    {
        view()->share(['title' => $title]);
    }
}
