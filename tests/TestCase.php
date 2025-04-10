<?php

declare(strict_types=1);

namespace Tests;

use HenryAvila\LaravelNovaEmailTracking\LaravelNovaEmailTrackingServiceProvider;
use Illuminate\Database\Eloquent\Factories\Factory;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'HenryAvila\\LaravelNovaEmailTracking\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            LaravelNovaEmailTrackingServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('services.mailgun.secret', 'key-9999999999999999999999999');
    }

    /**
     * Define database migrations.
     */
    protected function defineDatabaseMigrations(): void
    {
        $this->loadLaravelMigrations();
    }
}
