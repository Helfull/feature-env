<?php

namespace Helfull\FeatureEnv\Tests\Laravel;

use Helfull\FeatureEnv\Laravel\EnvLoader;
use Helfull\FeatureEnv\Tests\Laravel\TestCase;

class EnvLoaderTest extends TestCase
{
    /**
     * @test
     */
    public function itShouldLoadTheFeaturesFromTheConfig()
    {
        app('config')->set([
            'feature.features' => [
                'enabled' => ['yay_iam_enabled'],
            ],
        ]);

        $loaded = (new EnvLoader)->load();

        $this->assertArrayHasKey('enabled', $loaded);
        $this->assertContains('yay_iam_enabled', $loaded['enabled']);
    }
}
