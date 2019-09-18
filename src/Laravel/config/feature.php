<?php

return [
    'features' => [
        'enabled' => explode(',', env('FEATUREENV_ENABLED', '')),
    ],

    'loader' => env('FEATUREENV_LOADER', \Helfull\FeatureEnv\Laravel\EnvLoader::class),
];
