<?php

namespace Helfull\FeatureEnv\Tests;

use Helfull\FeatureEnv\FeatureEnv;
use Helfull\FeatureEnv\Tests\TestCase;

class FeatureEnvTest extends TestCase
{
    /**
     * @test
     */
    public function itShouldReturnIfAFeatureIsEnabled()
    {
        $featureEnv = new FeatureEnv(['enabled' => ['enabledFeature']]);
        $this->assertTrue($featureEnv->isEnabled('enabledFeature'));
        $this->assertFalse($featureEnv->isEnabled('disabledFeature'));
    }

    /**
     * @test
     */
    public function itShouldReturnIfAFeatureIsDisabled()
    {
        $featureEnv = new FeatureEnv(['enabled' => ['enabledFeature']]);
        $this->assertFalse($featureEnv->isDisabled('enabledFeature'));
        $this->assertTrue($featureEnv->isDisabled('disabledFeature'));
    }
}
