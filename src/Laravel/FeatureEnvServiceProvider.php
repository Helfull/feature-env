<?php declare(strict_types = 1);

namespace Helfull\FeatureEnv\Laravel;

use Illuminate\Support\ServiceProvider;

class FeatureEnvServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->singleton('feature', function ($app) {
            return new FeatureEnv($app->make('config')->get('feature'));
        });
    }

    public function boot(): void
    {
        $this->publishes([
            __DIR__.'/config/feature.php' => config_path('feature.php'),
        ]);
    }
}
