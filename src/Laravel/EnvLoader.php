<?php

declare(strict_types=1);

namespace Helfull\FeatureEnv\Laravel;

use Helfull\FeatureEnv\Contracts\Loader;

class EnvLoader implements Loader
{
    /**
     * @return array<string, array<string>>
     */
    public function load(): array
    {
        return app('config')->get('feature.features');
    }
}
