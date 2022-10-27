<?php

namespace JustinByrne\ABunchOfLivewireComponents;

use Illuminate\Support\ServiceProvider;

class ABunchOfLivewireComponents extends ServiceProvider
{
    private $config = 'a-bunch-of-livewire-components';
    
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/'.$this->config.'.php',
            $this->config
        );
    }

    public function boot()
    {
        $this->offerPublishing();
        
        $this->offerLivewireComponents();
    }
    
    protected function offerPublishing()
    {
        if (! function_exists('config_path')) {
            return;
        }

        $this->publishes([
            __DIR__.'/../config/'.$this->config.'.php' => config_path($this->config.'.php'),
        ], 'config');
    }

    protected function offerLivewireComponents()
    {
        //
    }

    protected function loadViews()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'a-bunch-of-livewire-components');
    }
}