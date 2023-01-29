<?php

namespace Khalin\LaravelTypescript;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Khalin\LaravelTypescript\Commands\LaravelTypescriptCommand;

class LaravelTypescriptServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-typescript-api')
            ->hasConfigFile();
    }
}
