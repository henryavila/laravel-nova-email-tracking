<?php

namespace HenryAvila\LaravelNovaEmailTracking;

use HenryAvila\LaravelNovaEmailTracking\Nova\LaravelNovaEmailTrackingTool;
use Laravel\Nova\Fields\MorphMany;

class LaravelNovaEmailTracking
{
    public static function hasManyEmailsField(string $label = null): MorphMany
    {
        return MorphMany::make(
            $label === null ? __('email-tracking::resources.emails') : $label,
            'emails',
            LaravelNovaEmailTrackingTool::$emailResource
        );
    }
}
