<?php

declare(strict_types=1);

namespace HenryAvila\LaravelNovaEmailTracking\Nova;

use HenryAvila\EmailTracking\Models\Email;
use HenryAvila\EmailTracking\Policies\EmailPolicy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Laravel\Nova\Nova;

class LaravelNovaEmailTrackingTool extends \Laravel\Nova\Tool
{
    public static string $emailResource = EmailResource::class;

    public string $emailPolicy = EmailPolicy::class;

    /**
     * Perform any tasks that need to happen when the tool is booted.
     *
     * @return void
     */
    public function boot()
    {
        Nova::resources([
            static::$emailResource,
        ]);

        Gate::policy(Email::class, $this->emailPolicy);
    }

    /**
     * Build the menu that renders the navigation links for the tool.
     *
     * @return mixed
     */
    public function menu(Request $request)
    {
        //
    }

    public function emailResource(string $emailResource): LaravelNovaEmailTrackingTool
    {
        static::$emailResource = $emailResource;

        return $this;
    }

    public function emailPolicy(string $emailPolicy)
    {
        $this->emailPolicy = $emailPolicy;

        return $this;
    }
}
