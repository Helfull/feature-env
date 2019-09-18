<?php

namespace Helfull\FeatureEnv\Tests\Laravel;

use Helfull\FeatureEnv\Laravel\FeatureEnvServiceProvider;
use Orchestra\Testbench\TestCase as OrchestraTestCase;

class TestCase extends OrchestraTestCase
{
    protected function getPackageProviders($app)
    {
        return [FeatureEnvServiceProvider::class];
    }
}
