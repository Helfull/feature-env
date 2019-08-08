<?php

namespace Helfull\FeatureEnv;

use Illuminate\Contracts\Config\Repository as ConfigRepository;

class FeatureEnv
{
    private $config;

    public function __construct(array $config)
    {
        $this->config = $config;
    }

    public function isEnabled(string $featureName): bool
    {
        return in_array($featureName, $this->config['enabled']);
    }

    public function isDisabled(string $featureName): bool
    {
        return ! $this->isEnabled($featureName);
    }
}
