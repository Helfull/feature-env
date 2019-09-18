<?php declare(strict_types = 1);

return [
    'features' => [
        'enabled' => explode(',', env('FEATUREENV_ENABLED', '')),
    ],

    'loader' => env('FEATUREENV_LOADER', \Helfull\FeatureEnv\Laravel\EnvLoader::class),
];
