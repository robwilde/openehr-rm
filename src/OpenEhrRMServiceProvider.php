<?php

namespace MrWilde\OpenEhrRM;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use MrWilde\OpenEhrRM\Commands\OpenEhrRMCommand;

class OpenEhrRMServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('openehr-rm')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_openehr-rm_table')
            ->hasCommand(OpenEhrRMCommand::class);
    }
}
