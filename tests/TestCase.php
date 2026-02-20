<?php

namespace Jenishev\Filament\Tests;

use Jenishev\Filament\FilamentServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function getPackageProviders($app): array
    {
        return [
            FilamentServiceProvider::class,
        ];
    }
}
