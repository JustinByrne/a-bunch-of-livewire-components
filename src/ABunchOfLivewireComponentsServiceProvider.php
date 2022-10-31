<?php

namespace JustinByrne\ABunchOfLivewireComponents;

use Illuminate\Support\ServiceProvider;
use JustinByrne\ABunchOfLivewireComponents\Livewire\Autocomplete;
use Livewire\Livewire;

class ABunchOfLivewireComponentsServiceProvider extends ServiceProvider
{
    private $slug = 'a-bunch-of-livewire-components';

    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/'.$this->slug.'.php',
            $this->slug
        );
    }

    public function boot()
    {
        $this->offerPublishing();

        $this->loadViews();

        $this->offerLivewireComponents();
    }

    protected function offerPublishing()
    {
        if (! function_exists('config_path')) {
            return;
        }

        $this->publishes([
            __DIR__.'/../config/'.$this->slug.'.php' => config_path($this->slug.'.php'),
        ], 'config');
    }

    protected function loadViews()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', $this->slug);
    }

    protected function offerLivewireComponents()
    {
        Livewire::component('abolc-autocomplete', Autocomplete::class);
    }
}
