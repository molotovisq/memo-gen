<?php

use Illuminate\Support\Facades\Route;

if (!function_exists('getCurrentTabActive')) {
    function getCurrentTabActive($currentTab, $className = 'active')
    {
        return (str_starts_with(Route::currentRouteName(), $currentTab)) ? $className : '';
    }
}

