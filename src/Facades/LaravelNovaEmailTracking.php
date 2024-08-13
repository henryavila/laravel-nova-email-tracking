<?php

declare(strict_types=1);

namespace HenryAvila\LaravelNovaEmailTracking\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \HenryAvila\LaravelNovaEmailTracking\LaravelNovaEmailTracking
 */
class LaravelNovaEmailTracking extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'email-tracking';
    }
}
