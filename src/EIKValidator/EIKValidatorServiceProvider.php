<?php

namespace Mirovit\EIKValidator;

use Illuminate\Support\ServiceProvider;

class EIKValidatorServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $validator = function ($attribute, $value, $parameters) {
            try {
                return (new EIKValidator())->isValid($$value);
            } catch (\Exception $e) {
                return false;
            }
        };

        $this->app['validator']->extend('eik', $validator);
        $this->app['validator']->extend('bulstat', $validator);
    }

    public function register()
    {
    }
}
