<?php declare(strict_types = 1);

namespace Helfull\FeatureEnv\Laravel;

use Illuminate\Support\ServiceProvider;

class FeatureEnvServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->singleton('feature', static function ($app) {
            $loader = $app->make('config')->get('feature.loader');
            $loader = $app->make($loader);
            return new FeatureEnv($loader->load());
        });
    }

    public function boot(): void
    {
        $this->publishes([
            __DIR__.'/config/feature.php' => config_path('feature.php'),
        ]);
    }
}
