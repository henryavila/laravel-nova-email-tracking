<?php

namespace HenryAvila\LaravelNovaEmailTracking;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelNovaEmailTrackingServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('email-tracking')
            ->hasConfigFile()
            ->hasTranslations()
            ->hasRoute('webhooks')
            ->hasMigration('create_emails_table')
            ->hasMigration('add_body_content_to_email_log');
    }
}
