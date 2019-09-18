<?php

declare(strict_types=1);

namespace Helfull\FeatureEnv;

class FeatureEnv
{
    /** @var array<string, array<string>> */
    private $config;

    /**
     * @param array<string, array<string>> $config
     */
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
