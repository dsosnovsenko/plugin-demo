<?php
namespace Demo\Providers;

use Plenty\Plugin\ServiceProvider;

class DemoServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     */

    public function register()
    {
        $this->getApplication()->register(DemoRouteServiceProvider::class);
    }
}