<?php

declare(strict_types=1);

namespace Helfull\FeatureEnv\Contracts;

interface Loader
{
    /**
     * @return array<string, array<string>>
     */
    public function load(): array;
}
