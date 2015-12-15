<?php

namespace Mirovit\EIKValidator;

use Illuminate\Support\ServiceProvider;

class EIKValidatorServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->app['validator']->extend('eik', function ($attribute, $value, $parameters) {
            return $this->validate($value);
        });

        $this->app['validator']->extend('bulstat', function ($attribute, $value, $parameters) {
            return $this->validate($value);
        });
    }

    public function register()
    {
    }

    private function validate($eik)
    {
        try {
            return (new EIKValidator())->isValid($eik);
        } catch (\Exception $e) {
            return false;
        }
    }
}
